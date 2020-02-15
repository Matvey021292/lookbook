

let glides = document.querySelectorAll(".glide");


glides.forEach(function (e, i) {
    
    let glides_slide = e.getAttribute('data-slide-count') || 7;
    if (e.querySelectorAll(".VerticalBookCard__tinyBook").length < glides_slide) {
        e.querySelector(".glide__arrows").innerHTML = "";
        return;
    }
    new Glide(e, {
        perView: glides_slide,
        type: "carousel",
        startAt: 0,
        breakpoints: {
            800: {
                perView: 2
            }
        }
    }).mount();
    
    if (document.querySelectorAll('.loader')) {
        document.querySelectorAll('.loader').forEach(function (e, i) {
            e.classList.remove('show')
        });
    }
});



if (document.querySelector('.single-slider')) {
    wheelSlider();
}

function wheelSlider() {
    window.addEventListener('wheel', function (event) {
        if (event.deltaY < 0) {
            document.querySelector('.single-slider .arrowRight').click()
        }
        else if (event.deltaY > 0) {
            document.querySelector('.single-slider .arrowLeft').click()
        }
    });
}



new autoComplete({
    data: {
        src: async () => {
            const query = document.querySelector("#autoComplete").value;
            const source = await fetch(
                `${ajax_login_object.search_url}?search=${query}`
                );
                const data = await source.json();
                return data.recipes;
            },
            key: ["Title"],
            cache: false
        },
        placeHolder: "Поиск",
        selector: "#autoComplete",
        threshold: 3,
        debounce: 300,
        searchEngine: "strict",
        resultsList: {
            render: true,
            container: source => {
                source.setAttribute("id", "autoComplete_list");
            },
            destination: document.querySelector("#autoComplete"),
            position: "afterend",
            element: "ul"
        },
        maxResults: 12,
        highlight: true,
        resultItem: {
            content: (data, source) => {
                source.innerHTML = data.match;
            },
            element: "li"
        },
        noResults: () => {
            const result = document.createElement("li");
            result.setAttribute("class", "no_result");
            result.setAttribute("tabindex", "1");
            result.innerHTML = "No Results";
            document.querySelector("#autoComplete_list").appendChild(result);
        },
        onSelection: feedback => {
            document.querySelector("#autoComplete").value =
            feedback.selection.value.Title;
            window.location = feedback.selection.value.slug;
        }
    });
    
    function showMessageNotAuth(e, message) {
        e.preventDefault();
        alert(message);
    }
    
    document.addEventListener('click', function () {
        document.querySelector('#autoComplete_list').innerHTML = '';
    })
    
    
    let password = document.getElementById("new_password")
    , confirm_password = document.getElementById("confirm_password");
    
    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Пароли не совпадают");
        } else {
            confirm_password.setCustomValidity('');
        }
    }
    if (password) {
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    }
    
    let switcher = document.querySelectorAll('.FormTextInput__passwordVisibilitySwitcher');
    switcher.forEach(function (e, i) {
        e.addEventListener('click', function (e) {
            switchValue(e);
        })
    })
    
    function switchValue(e) {
        e.preventDefault();
        
        let parent = e.target.closest('.FormTextInput__control');
        parent.classList.toggle('visible');
        parent.querySelector('input').type = 'password';
        
        if (parent.classList.contains('visible')) {
            parent.querySelector('input').type = 'text';
        }
    }
    
    
    function handleChangeFiles(files, img) {
        for (let i = 0; i < files.length; i++) {
            let file = files[i];
            
            if (!file.type.startsWith('image/')) { alert('Загрузите изображение'); continue }
            
            let image = document.querySelector(img);
            
            let reader = new FileReader();
            reader.onload = (function (aImg) { return function (e) { aImg.src = e.target.result; }; })(image);
            reader.readAsDataURL(file);
        }
    }
    
    let inputElement = document.querySelector('input[name="profile_image"]');
    if (inputElement) {
        inputElement.addEventListener("change", function () {
            handleChangeFiles(this.files, '.UserSettingsAvatar__userImagePreviewContent');
        });
    }
    
    
    
    
    document.addEventListener('click', function (event) {
        if (!document.querySelector('.BookStatusChangePopup__buttonFunctional')) return;
        
        let e = event.target;
        let add = 'add_book_my_list';
        let remove = 'remove_book_my_list';
        let data = {
            'book': book_id,
        };
        if (e.classList.contains(add)) {
            event.preventDefault();
            requestPostData(route_booklist_add, data)
            .then(e => showModal(e.message));
            let els = document.getElementsByClassName(add);
            [].forEach.call(els, function (el) {
                el.innerHTML = '<i class="fas fa-minus"></i><span class="menu-title">Удалить из списка</span>'
            });
            reverseClassList(e, remove, add);
            
        } else if (e.classList.contains(remove)) {
            event.preventDefault();
            requestPostData(route_booklist_remove, data)
            .then(e => console.log(e.message));
            let els = document.getElementsByClassName(remove);
            [].forEach.call(els, function (el) {
                el.innerHTML = '<i class="fas fa-plus"></i> <span class="menu-title">Добавить в список</span> ';
            });
           
            reverseClassList(e, add, remove);
        }
    })
    
    function reverseClassList(e, classadd, classremove) {
        e.classList.add(classadd);
        e.classList.remove(classremove);
    }
    
    
    async function requestPostData(route, data) {
        
        let meta = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let response = await fetch(route, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
                'X-CSRF-TOKEN': meta
            },
            body: JSON.stringify(data)
        });
        
        return await response.json();
    }
    
    let download_files = document.querySelectorAll('.download_file');
    download_files.forEach(function (el, i) {
        el.addEventListener('click', function (e) {
            if (!e.target.dataset.format) return;
            e.preventDefault();
            let data = {
                'file': e.target.href,
                'format': e.target.dataset.format
            }
            requestPostData(download_route, data)
            .then(e => window.open(e.message))
        })
    })
    
    
    function showLoader(el) {
        let content = window.document;
        if (el) content = el;
        let loader = content.querySelector('.loader');
        if (loader) loader.classList.add('show')
    }
    
    function hideLoader(el) {
        let content = window.document;
        if (el) content = el;
        let loader = content.querySelector('.loader');
        if (loader) loader.classList.remove('show')
    }
    
    let collapse_btn = document.querySelectorAll('*[data-toggle="collapse"] .toggle-icon');
    
    collapse_btn.forEach(function (e, i) {
        e.addEventListener('click', function () {
            e.closest('*[data-toggle="collapse"]').classList.toggle('open');
        })
    })
    
    var trigger = document.querySelectorAll(".trigger");
    var modal = document.querySelector(".modal");
    var closeButton = document.querySelectorAll(".close-button");
    
    
    window.addEventListener("click", function (e) {
        let enable = document.querySelector('.show-modal');
        if (enable && e.target.classList.contains('show-modal')) {
            toggleModal(enable);
        }
    });

    window.addEventListener('click', function(e){
        if(e.target.classList.contains('close-button')){
            if(e.target.closest('.show-modal')){
                e.target.closest('.show-modal').classList.remove('show-modal');
            }
        }
    });
    
    function toggleModal(enable) {
        hideLoader(enable);
        enable.classList.toggle("show-modal");
    }
    
    trigger.forEach(function (e) {
        e.addEventListener("click", function (e) {
            e.preventDefault();
            elem = document.querySelector(e.target.getAttribute('data-modal'));
            toggleModal(elem);
        });
    })
    
    closeButton.forEach(function (e) {
        e.addEventListener("click", function () {
            toggleModal(elem);
        });
    })
    
    document.querySelectorAll('.alert').forEach(function (e) {
        
        let i = 0,
        time = 3000;
        
        let timerId = setInterval(function () {
            if (i < 100) {
                i++;
            } else {
                clearInterval(timerId);
            }
            e.querySelector('.progress').style.right = i + '%';
            
        }, (time / 120));
        
        setTimeout(function () {
            e.classList.add('hide');
        }, time);
        
    })
    
    
    document.querySelectorAll('.close').forEach(function (e) {
        e.addEventListener('click', function (e) {
            if (e.target.closest('.alert')) {
                e.target.closest('.alert').classList.add('hide');
            }
        })
    })
    
    document.querySelectorAll('form.ajax').forEach(function (element) {
        element.addEventListener('submit', function (e) {
            e.preventDefault();
            let formData = new FormData(this);
            showLoader(element);
            requestPost(this.action, formData)
            .then((data) => {
                if (data.status == 'success') {
                    window.location = data.message.redirect;
                }
                setTimeout(function () {
                    hideLoader(element);
                    removeMessage(element);
                    for (let fields in data.message.field) {
                        let field = element.querySelector(`input[name='${fields}']`);
                        appendMessage(field, data.status, data.message.field[fields]);
                    }
                }, 500)
            })
        })
    })
    
    function appendMessage(element, status, message) {
        
        let row = element.closest('.Form__formRow');
        row.classList.add(status);
        row.appendChild(createMessage(status, message));
    }
    
    function removeMessage(element) {
        let row = element.closest('.ajax');
        
        let errors = document.querySelectorAll('.error');
        if (errors.length) {
            errors.forEach(function (error, i) {
                error.classList.remove('error')
            });
        }
        
        
        let msg = row.querySelectorAll('.ValidationMessage');
        if (msg.length) {
            msg.forEach(function (message, i) {
                message.remove();
            })
        };
    }
    
    function createMessage(status, messages) {
        let msg = document.createElement('div');
        msg.classList.add(`${status}`, `ValidationMessage`);
        let message = '';
        messages.forEach(function (e) {
            message += `<span>${e}</span>`;
        });
        msg.innerHTML = message;
        return msg;
    }
    
    async function requestPost(route, data) {
        
        let meta = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let response = await fetch(route, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': meta
            },
            body: data
        });
        
        return await response.json();
    }
    
    let filter_input =  document.querySelector('.select');
    if(filter_input){
        filter_input.addEventListener('change', function(e){
            add_params_url();
            let form = this.closest('form');
            let body = document.body;
            let formData = new FormData(form);
            showLoader(body);
            requestPost(form.action, formData)
            .then((data) => {
                if (data.status == 'success') {
                    document.querySelector('.wrapper-row').innerHTML = data.message;
                    hideLoader(body);
                }else{
                    console.log(data.message);
                }
            })
        })
    }
    
    function add_params_url() {
        let params = {};
        let select;
        document.querySelectorAll('.select').forEach(function (e) {
            select = e.options[e.selectedIndex].value;
            if ( select !== '0') {
                params[e.name] = select;
            }
        });
        let regexp = /page\/\d\//;
        let location = window.location.href;
        console.log(select)
        if (location.search(regexp) !== -1) {
            location = location.replace(regexp, '');
            // location += '?' + $.param(params);
            location += '?' + new URLSearchParams(Object.entries(params));
            window.location = location;
        }
        if (params) history.pushState('', '', '?' + new URLSearchParams(Object.entries(params)));
        // $(".subscribe_organization option[data-value='" + select + "']").attr('selected', 'selected');
    }
    
    
    function showModal(message){
        
        let modal = document.createElement('div');
        modal.innerHTML += `<div class="modal show-modal">
        <div class="modal-content">
        <span class="close-button">×</span>
        <div class="card AuthFormDialog__inner">${message}</div>
        </div>
        </div>`;
        document.body.append(modal);

    }
    