var glides = document.querySelectorAll(".glide");

glides.forEach(function (e, i) {
    if (e.querySelectorAll(".VerticalBookCard__tinyBook").length <= 7) {
        e.querySelector(".glide__arrows").innerHTML = "";
        return;
    }
    new Glide(e, {
        perView: 7,
        type: "carousel",
        startAt: 0
    }).mount();

});

var glides = document.querySelectorAll(".glides");

glides.forEach(function (e, i) {
    if (e.querySelectorAll(".VerticalBookCard__tinyBook").length <= 7) {
        e.querySelector(".glide__arrows").innerHTML = "";
        return;
    }
    new Glide(e, {
        perView: 3,
        type: "carousel",
        startAt: 0
    }).mount();

});


window.addEventListener('wheel', function (event) {
    if (event.deltaY < 0) {
        document.querySelector('.single-slider .arrowRight').click()
    }
    else if (event.deltaY > 0) {
        document.querySelector('.single-slider .arrowLeft').click()
    }
});

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
        key: ["title"],
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
            feedback.selection.value.title;
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


var password = document.getElementById("new_password")
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

var switcher = document.querySelectorAll('.FormTextInput__passwordVisibilitySwitcher');
switcher.forEach(function (e, i) {
    e.addEventListener('click', function (e) {
        switchValue(e);
    })
})

function switchValue(e) {
    e.preventDefault();

    var parent = e.target.closest('.FormTextInput__control');
    parent.classList.toggle('visible');
    parent.querySelector('input').type = 'password';

    if (parent.classList.contains('visible')) {
        parent.querySelector('input').type = 'text';
    }
}


function handleChangeFiles(files, img) {
    for (let i = 0; i < files.length; i++) {
        var file = files[i];

        if (!file.type.startsWith('image/')) { alert('Загрузите изображение'); continue }

        var img = document.querySelector(img);

        var reader = new FileReader();
        reader.onload = (function (aImg) { return function (e) { aImg.src = e.target.result; }; })(img);
        reader.readAsDataURL(file);
    }
}

var inputElement = document.querySelector('input[name="profile_image"]');
if (inputElement) {
    inputElement.addEventListener("change", function () {
        handleChangeFiles(this.files, '.UserSettingsAvatar__userImagePreviewContent');
    });
}


var btn_select = document.querySelector('.BookStatusChangePopup__buttonFunctional');

btn_select.addEventListener('click', function (e) {
    selectedFile(this);
})