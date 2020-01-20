

let glides = document.querySelectorAll(".glide");


glides.forEach(function (e, i) {

    let glides_slide = e.getAttribute('data-slide-count') || 7;
    if (e.querySelectorAll(".VerticalBookCard__tinyBook").length <= glides_slide) {
        e.querySelector(".glide__arrows").innerHTML = "";
        return;
    }
    new Glide(e, {
        perView: glides_slide,
        type: "carousel",
        startAt: 0
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
            .then(e => console.log(e.message));
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


function showLoader() {
    document.querySelector('.loader').classList.add('show');
}

function hideLoader() {
    document.querySelector('.loader').classList.remove('show');
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
    var enable = document.querySelector('.show-modal');
    if (enable && e.target.classList.contains('show-modal')) {
        toggleModal(elem);
    }

});

function toggleModal(elem) {
    elem.classList.toggle("show-modal");
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

    // document.querySelectorAll('form.ajax').forEach(function (element) {
    //     element.addEventListener('submit', function (e) {
    //         e.preventDefault();
    //         let formData = new FormData(this);
    //         requestPostData(this.action, formData)
    //     })
    // })




    // var loginForm = $("#loginForm");
    // loginForm.submit(function(e){
    //     e.preventDefault();
    //     var formData = loginForm.serialize();

    //     $.ajax({
    //         url:'auth/login',
    //         type:'POST',
    //         data:formData,
    //         success:function(data){
    //             console.log(data);
    //         },
    //         error: function (data) {
    //             console.log(data);
    //         }
    //     });
    // });

    // alert('Successfully Loaded');