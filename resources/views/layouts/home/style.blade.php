<link rel="stylesheet" href="{{ URL::asset('css/material-kit.mine8da.css?v=2.0.3') }}">
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome/css/all.min.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Nerko+One&display=swap">
<style>
html, body {
    height: 100%;
}

body {
    background-color: #f4f5f9;
    color: #22252f;
    font-family: "Poppins", Verdana, sans-serif;
}

.bg-2 {
    background: url({{ URL::asset('images/common/bg-2.jpg') }});
    background-repeat: no-repeat;
    background-size: cover;
}

.bg-3 {
    background: url({{ URL::asset('images/common/bg-3.jpg') }});
    background-repeat: no-repeat;
    background-size: cover;
}

.container-fluid-custom {
    padding: 0 6%;
    max-width: 1440px !important;
}

.header-navbar {
    background-color: #f4f5f9 !important;
    color: #555 !important;
}

.header-navbar .navbar-brand {
    background-image: url({{ URL::asset('images/common/logo.png') }});
    background-repeat: no-repeat;
    background-size: cover;
    height: 40px;
    width: 128px;
}

.navbar .navbar-nav .nav-item .nav-link {
    color: #22252f;
    font-size: 14px;
    font-weight: 600;
    text-transform: none;
}

.btn-book-a-demo > a {
    background-color: #FC6823;
    border-color: #FC6823;
    font-size: 16px;
    text-transform: none;
}

.btn-book-a-demo > a:hover, .btn-book-a-demo > a:visited, .btn-book-a-demo > a:focus, .btn-book-a-demo > a:active, .section-one-btn-left, .nav-pills .nav-item .nav-link.active {
    background-color: #FC6823 !important;
}

.section-one {
    padding-bottom: 45px;
    padding-top: 170px;
}

.section-one-title {
    display: block;
    font-size: 50px;
    font-weight: 800;
}

.section-one-desc {
    display: block;
    margin-top: 35px;
}

.section-one-btn-left, .section-one-btn-right {
    font-size: 13px;
    margin: 30px 5px 15px 5px;
    text-transform: none;
}

.section-one-btn-right {
    background-color: #FFFFFF !important;
    color: #FC6823 !important;
}

.section-two {
    padding-bottom: 20px;
}

.grid-wrapper {
    background: #ffffffe0;
    border: 1px solid #fc68232b;
    border-radius: 15px;
    box-shadow: 0 2px 2px 0 rgba(153,153,153,0.14), 0 3px 1px -2px rgba(153,153,153,0.2), 0 1px 5px 0 rgba(153,153,153,0.12);
    padding: 20px;
    width: 100%;
}

.overflow-x-auto {
    overflow-x: auto;
}

.grid {
    max-width: 782px;
}

.grid-element {
    border: 1px solid #fc6823a8;
    border-radius: 15px;
    height: 80px;
    margin: 5px;
    min-width: 120px;
    padding: 10px;
    width: 25%;
}

.grid-element.is-filled, .grid-element.selection-enabled {
    cursor: pointer;
}

.grid-element.not-filled, .grid-element.selection-disabled {
    background: #a7a4a4;
    border-color: #a7a4a4;
    cursor: not-allowed;
    opacity: 0.3;
}

.grid-element.grid-selected {
    border: 4px solid #000000;
}

.grid-element.grid-selected i {
    color: #000000;
    font-size: 35px;
}

.hidden {
    display: none;
}

.form-group label {
    color: #22252f;
}

.form-group-label {
    font-weight: 800;
}

.nav-pills .nav-item .nav-link {
    text-transform: none;
}

.nav-pills .nav-item .nav-link.active {
    box-shadow: 0 5px 20px 0 rgba(0,0,0,0.2), 0 13px 24px -11px rgba(252,104,35,0.6)
}

.dancing-script {
    font-family: 'Dancing Script', cursive;
}

.nerko-one {
    font-family: 'Nerko One', cursive;
}

.velvet-sun {
    background: #e1eec3;
    background: -webkit-linear-gradient(to right, #f05053, #e1eec3);
    background: linear-gradient(to right, #f05053, #e1eec3);
    border: none;
}

.nepal {
    background: #de6161;
    background: -webkit-linear-gradient(to right, #2657eb, #de6161);
    background: linear-gradient(to right, #2657eb, #de6161);
    border: none;
}

.btn-cancel {
    margin-right: 12px !important;
}

.btn-submit, .btn-cancel {
    box-shadow: 0 2px 2px 0 rgba(153,153,153,0.14), 0 3px 1px -2px rgba(153,153,153,0.2), 0 1px 5px 0 rgba(153,153,153,0.12) !important;
}

.alert.alert-primary {
    background: #ddd6f3;
    background: -webkit-linear-gradient(to right, #faaca8, #ddd6f3);
    background: linear-gradient(to right, #faaca8, #ddd6f3);
    display: flex !important;
    align-items: center !important;
}

.navbar.navbar-transparent .navbar-toggler .navbar-toggler-icon {
    background-color: #555;
}

.navbar-collapse .navbar-nav {
    align-items: center;
    display: flex;
    justify-content: center;
}

@media (max-width: 785px) {
    .section-one-title {
        font-size: 40px;
    }
}

@media (min-width: 768px) {
    .alert.alert-primary {
        max-width: 325px;
    }
}

@media (max-width: 560px) {
    .section-one-title {
        font-size: 30px;
    }
}

@media (max-width: 371px) {
    .section-one-btn-left, .section-one-btn-right {
        margin: 15px 0;
    }
}

@media (max-width: 348px) {
    .section-one-btn-left, .section-one-btn-right {
        margin: 15px 0;
    }
}

/*.navbar.header-navbar {
    align-items: flex-end;
    display: flex;
    height: 110px;
    padding: 0;
}

.navbar.header-navbar > .container-fluid {
    align-items: flex-end;
}

.header-navbar .navbar-brand {
    background-image: url({{ URL::asset('images/common/logo.png') }});
    background-repeat: no-repeat;
    background-size: cover;
    height: 78px;
    margin-bottom: 3%;
    width: 153px;
}*/

/*.navbar.header-navbar .navbar-collapse {
    padding: .9375rem 1.5rem 0.8rem 1.5rem;
}

.navbar.header-navbar .navbar-nav .nav-item .nav-link {
    color: #7080A0;
    font-size: 1.2rem;
    text-transform: none;
}

.navbar.header-navbar .btn-sign-up {
    background-color: #B7BFCF;
    color: #7080A0;
    font-size: 1.2rem;
    padding: 2px 15px;
    margin: 0;
    text-transform: none;
}*/
</style>
