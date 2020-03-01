import Glide from '@glidejs/glide';
import autoComplete from "@tarekraafat/autocomplete.js";
import Keyboard from 'simple-keyboard';
import Swal from 'sweetalert2'

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
                perView: 3
            },
            340: {
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
        } else if (event.deltaY > 0) {
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
                if (data.query) {
                    document.querySelector("#autoComplete").value = data.query;
                }
                return data.recipes;
            },
            key: ["Title"],
            cache: false
        },
        placeHolder: "Поиск",
        selector: "#autoComplete",
        threshold: 3,
        debounce: 300,
        searchEngine: "loose",
        resultsList: {
            render: true,
            container: source => {
                source.setAttribute("id", "autoComplete_list");
            },
            destination: document.querySelector("#autoComplete"),
            position: "afterend",
            element: "ul",
        },
        maxResults: 12,
        highlight: true,
        resultItem: {
            content: (data, source) => {
                let picture = '', item;
                if (data.value.File) {
                    // picture = "<img class='autoComplete_picture' src='" + data.value.File + "'></img>";
                }
                item = "<em class='test_sm'>" + data.value.key + "</em>";
                source.innerHTML = picture + "<div>" + item + data.match + "</div>";
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
            
            if (!file.type.startsWith('image/')) {
                alert('Загрузите изображение');
                continue
            }
            
            let image = document.querySelector(img);
            
            let reader = new FileReader();
            reader.onload = (function (aImg) {
                return function (e) {
                    aImg.src = e.target.result;
                };
            })(image);
            reader.readAsDataURL(file);
        }
    }
    
    let inputElement = document.querySelector('input[name="profile_image"]');
    if (inputElement) {
        inputElement.addEventListener("change", function () {
            handleChangeFiles(this.files, '.UserSettingsAvatar__userImagePreviewContent');
        });
    }
    
    
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
                'file': document.querySelector('input[name="book_id"]').value,
                'format': e.target.dataset.format
            }
            requestPostData(download_route, data)
            .then(e => {
                if (e.status == 'success') {
                    console.log(e.message);
                    window.location.href = e.message;
                } else {
                    console.log(e.message)
                }
            })
        })
    })
    
    
    function download(data, filename, type) {
        var file = new Blob([data], {type: type});
        if (window.navigator.msSaveOrOpenBlob) // IE10+
        window.navigator.msSaveOrOpenBlob(file, filename);
        else { // Others
            var a = document.createElement("a"),
            url = URL.createObjectURL(file);
            a.href = url;
            a.download = filename;
            document.body.appendChild(a);
            a.click();
            setTimeout(function () {
                document.body.removeChild(a);
                window.URL.revokeObjectURL(url);
            }, 0);
        }
    }
    
    
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
    });
    
    var buttons = document.querySelectorAll(".trigger");
    
    function openModal(modal) {
        if (!modal) return;
        addOverflow();
        hideLoader(modal);
        modal.classList.add("show-modal");
        modal.firstElementChild.classList.add('swal2-show');
    }
    
    function closeModal(modal = '') {
        if (!modal) {
            modal = document.querySelector('.show-modal');
        }
        if (!modal) return;
        removeOverflow();
        hideLoader(modal);
        modal.classList.remove("show-modal");
        modal.firstElementChild.classList.remove('swal2-show');
    }
    
    
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });
    
    function addOverflow() {
        document.body.classList.add('body_overflow');
    }
    
    function removeOverflow() {
        document.body.classList.remove('body_overflow');
    }
    
    buttons.forEach(function (e) {
        e.addEventListener("click", function (e) {
            e.preventDefault();
            let modal = document.querySelector(this.getAttribute('data-modal'));
            if (this.closest('.show-modal')) closeModal(this.closest('.show-modal'));
            openModal(modal);
        });
    });
    
    window.addEventListener("click", function (e) {
        
        let modal;
        
        if (e.target.classList.contains('close-button')) {
            
            modal = e.target.closest('.show-modal');
            
        } else if (e.target.classList.contains('show-modal')) {
            
            modal = e.target;
            
        } else {
            
            return;
        }
        
        closeModal(modal);
    });
    
    let modals = document.querySelectorAll('.alert');
    
    modals.forEach(function (e) {
        
        
        let i = 0,
        time = 3000;
        
        let timerId = setInterval(function () {
            if (i < 100) {
                i++;
            } else {
                clearInterval(timerId);
            }
            if (!e.querySelector('.progress')) return;
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
        }
        ;
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
    
    let filter_input = document.querySelector('.select');
    if (filter_input) {
        filter_input.addEventListener('change', function (e) {
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
                } else {
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
            if (select !== '0') {
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
    
    function createModal(message, id) {
        
        let modal = document.createElement('div');
        modal.innerHTML += `<div id="${id}" class="modal">
        <div class="modal-content">
        <span class="close-button"><i class="fas fa-times"></i></span>
        <div class="card AuthFormDialog__inner">${message}</div>
        </div>
        </div>`;
        document.body.append(modal);
        
    }
    
    const russian = {
        default: [
            "\u0451 1 2 3 4 5 6 7 8 9 0 - = {bksp}",
            "{tab} \u0439 \u0446 \u0443 \u043a \u0435 \u043d \u0433 \u0448 \u0449 \u0437 \u0445 \u044a \\",
            "{lock} \u0444 \u044b \u0432 \u0430 \u043f \u0440 \u043e \u043b \u0434 \u0436 \u044d {enter}",
            "{shift} \\ \u044f \u0447 \u0441 \u043c \u0438 \u0442 \u044c \u0431 \u044e / {shift}",
            ".com @ {space}"
        ],
        shift: [
            '\u0401 ! " \u2116 ; % : ? * ( ) _ + {bksp}',
            "{tab} \u0419 \u0426 \u0423 \u041a \u0415 \u041d \u0413 \u0428 \u0429 \u0417 \u0425 \u042a /",
            "{lock} \u0424 \u042b \u0412 \u0410 \u041f \u0420 \u041e \u041b \u0414 \u0416 \u042d {enter}",
            "{shift} / \u042f \u0427 \u0421 \u041c \u0418 \u0422 \u042c \u0411 \u042e / {shift}",
            ".com @ {space}"
        ]
    };
    
    let myKeyboard = new Keyboard({
        onChange: input => onChange(input),
        onKeyPress: button => onKeyPress(button),
        layout: russian
    });
    
    function onChange(input) {
        document.querySelector(".input").value = input;
        console.log("Input changed", input);
    }
    
    function onKeyPress(button) {
        console.log("Button pressed", button);
    }
    
    document.querySelector('.virtual_kd').addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector('.simple-keyboard').classList.toggle('show');
    })
    
    
    var observer = new IntersectionObserver(function (entries) {
        // no intersection with screen
        if (entries[0].intersectionRatio === 0)
        document.querySelector("#nav-container").classList.add("nav-container-sticky");
        // fully intersects with screen
        else if (entries[0].intersectionRatio === 1)
        document.querySelector("#nav-container").classList.remove("nav-container-sticky");
    }, {threshold: [0, 1]});
    
    observer.observe(document.querySelector("#nav-container-top"));
    
    
    window.addEventListener('load', function () {
        
        let data = {
            'file': book_id,
            'format': document.querySelector('input[name="book_format"]').value,
            'init': true
        }
        requestPostData(download_route, data)
        .then(e => {
            if (e.status == 'success') {
                window.open(e.message)
            } else {
                console.log(download_route + ':' + e.message)
            }
        });
    });
    
    document.addEventListener('click', function (event) {
        
        if (event.target.classList.contains('booklist')) {
            event.preventDefault();
            
            let icon = 'info';
            let data = {
                'book_ID': document.querySelector('input[name="book_id"]').value,
                'status_book': event.target.getAttribute('data-status')
            };
            
            requestPostData("/profile/booklist", data)
            .then(e => {
                
                console.log(e.status);
                if (e.status != 'error') {
                    icon = 'success';
                    if (data.status_book == 1) {
                        event.target.setAttribute('data-status', 0);
                        event.target.innerHTML = '<i class="fas fa-minus"></i><span class="menu-title">Удалить</span>';
                    } else {
                        event.target.setAttribute('data-status', 1);
                        event.target.innerHTML = '<i class="fas fa-plus"></i><span class="menu-title">Добавить</span>';
                    }
                }
                
                Swal.fire({
                    html: e.message,
                    icon: icon,
                    showCancelButton: false,
                    showCloseButton: true,
                    focusConfirm: false,
                    showConfirmButton: false,
                })
            });
        }
    });
    
    function loading_data(){
        let more = document.querySelector('#more');
        if(more){
                let action = more.getAttribute('data-action');
            // more.addEventListener('click', function(e){
                // e.preventDefault();
                if(!action) return;
                let page = window.location.search || '?page=1';
                let param = new URLSearchParams(page);
                let newParam = '?page=' + (1 + ( + param.get('page')));
                window.history.pushState('','', newParam);
                requestPost('/ajax' + action +  newParam)
                .then(e => {
                    if(e.status == 'success'){
                        let content = document.querySelector('.swiper-wrapper');
                        content.innerHTML = content.innerHTML + e.message;
                    }
                })
                setTimeout(function(){
                    hideLoader();
                }, 400)
            // })
        }
    }
    
    window.onscroll = function(ev) {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            showLoader();
            loading_data();
        }
    };
    