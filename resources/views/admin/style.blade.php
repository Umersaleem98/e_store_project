
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
html, body {
  height: 100%;
  width: 100%;
}

body {
  margin: 0;
  padding: 0;
  font-family: "Open Sans";
  font-size: 14px;
  font-weight: 400;
  overflow: hidden;
  background-color: #ececec;
  color: #102c58;
}

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

::-webkit-input-placeholder {
  color: #c3c3c3;
}

h1 {
  font-size: 24px;
}

h2 {
  font-size: 20px;
}

h3 {
  font-size: 18px;
}

.u-list {
  margin: 0;
  padding: 0;
  list-style: none;
}

.u-input {
  outline: 0;
  border: 1px solid #d0d0d0;
  padding: 5px 10px;
  height: 35px;
  font-size: 12px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  background-clip: padding-box;
}

.c-badge {
  font-size: 10px;
  font-weight: 700;
  min-width: 17px;
  padding: 5px 4px;
  border-radius: 100px;
  display: block;
  line-height: 0.7;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #f91605;
}
.c-badge--header-icon {
  position: absolute;
  bottom: -9px;
}

.tooltip {
  width: 120px;
}
.tooltip-inner {
  padding: 8px 10px;
  color: #fff;
  text-align: center;
  background-color: #051835;
  font-size: 12px;
  border-radius: 3px;
}
.tooltip-arrow {
  border-right-color: #051835 !important;
}

.hamburger-toggle {
  position: relative;
  padding: 0;
  background: transparent;
  border: 1px solid transparent;
  cursor: pointer;
  order: 1;
}
.hamburger-toggle [class*='bar-'] {
  display: block;
  background: #102c58;
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .2s ease all;
  transition: .2s ease all;
  border-radius: 2px;
  height: 2px;
  width: 24px;
  margin-bottom: 4px;
}
.hamburger-toggle [class*='bar-']:nth-child(2) {
  width: 18px;
}
.hamburger-toggle [class*='bar-']:last-child {
  margin-bottom: 0;
  width: 12px;
}
.hamburger-toggle.is-opened {
  left: 3px;
}
.hamburger-toggle.is-opened [class*='bar-'] {
  background: #102c58;
}
.hamburger-toggle.is-opened .bar-top {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  -webkit-transform-origin: 15% 15%;
  transform-origin: 15% 15%;
}
.hamburger-toggle.is-opened .bar-mid {
  opacity: 0;
}
.hamburger-toggle.is-opened .bar-bot {
  -webkit-transform: rotate(45deg);
  transform: rotate(-45deg);
  -webkit-transform-origin: 15% 95%;
  transform-origin: 15% 95%;
  width: 24px;
}
.hamburger-toggle:focus {
  outline-width: 0;
}
.hamburger-toggle:hover [class*='bar-'] {
  background: #f5642d;
}

.header-icons-group {
  display: flex;
  order: 3;
  margin-left: auto;
  height: 100%;
  border-left: 1px solid #cccccc;
}
.header-icons-group .c-header-icon:last-child {
  border-right: 0;
}

.c-header-icon {
  position: relative;
  display: flex;
  float: left;
  width: 70px;
  height: 100%;
  align-items: center;
  justify-content: center;
  line-height: 1;
  cursor: pointer;
  border-right: 1px solid #cccccc;
}
.c-header-icon i {
  font-size: 18px;
  line-height: 40px;
}
.c-header-icon--in-circle {
  border: 1px solid #d0d0d0;
  border-radius: 100%;
}
.c-header-icon:hover i {
  color: #f5642d;
}

.l-header {
  padding-left: 70px;
  position: fixed;
  top: 0;
  right: 0;
  z-index: 10;
  width: 100%;
  background: #ffffff;
  -webkit-transition: padding 0.5s ease-in-out;
  -moz-transition: padding 0.5s ease-in-out;
  -ms-transition: padding 0.5s ease-in-out;
  -o-transition: padding 0.5s ease-in-out;
  transition: padding 0.5s ease-in-out;
}
.l-header__inner {
  height: 100%;
  width: 100%;
  display: flex;
  height: 70px;
  align-items: center;
  justify-content: stretch;
  border-bottom: 1px solid;
  border-color: #cccccc;
}
.sidebar-is-expanded .l-header {
  padding-left: 220px;
}

.c-search {
  display: flex;
  height: 100%;
  width: 350px;
}
.c-search__input {
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
  border-right: 0;
  flex-basis: 100%;
  height: 100%;
  border: 0;
  font-size: 14px;
  padding: 0 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.c-dropdown {
  opacity: 0;
  text-align: left;
  position: absolute;
  flex-direction: column;
  display: none;
  width: 300px;
  top: 30px;
  right: -40px;
  background-color: #fff;
  overflow: hidden;
  min-height: 300px;
  border: 1px solid #d0d0d0;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  background-clip: padding-box;
  -webkit-box-shadow: 0px 5px 14px -1px #cecece;
  -moz-box-shadow: 0px 5px 14px -1px #cecece;
  box-shadow: 0px 5px 14px -1px #cecece;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.l-sidebar {
  width: 70px;
  position: absolute;
  z-index: 10;
  left: 0;
  top: 0;
  bottom: 0;
  background: #102c58;
  -webkit-transition: width 0.5s ease-in-out;
  -moz-transition: width 0.5s ease-in-out;
  -ms-transition: width 0.5s ease-in-out;
  -o-transition: width 0.5s ease-in-out;
  transition: width 0.5s ease-in-out;
}
.l-sidebar .logo {
  width: 100%;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #051835;
}
.l-sidebar .logo .logo__txt {
  font-size: 26px;
  line-height: 1;
  color: #fff;
  text-align: center;
  font-weight: 700;
}
.l-sidebar__content {
  height: 100%;
  position: relative;
}
.sidebar-is-expanded .l-sidebar {
  width: 220px;
}

.c-menu > ul {
  display: flex;
  flex-direction: column;
}
.c-menu > ul .c-menu__item {
  color: #fff;
  max-width: 100%;
  overflow: hidden;
}
.c-menu > ul .c-menu__item__inner {
  display: flex;
  flex-direction: row;
  align-items: center;
  min-height: 60px;
  position: relative;
  cursor: pointer;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.c-menu > ul .c-menu__item__inner:before {
  position: absolute;
  content: " ";
  height: 0;
  width: 2px;
  left: 0;
  top: 50%;
  margin-top: -18px;
  background-color: #5f9cfd;
  opacity: 0;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.c-menu > ul .c-menu__item.is-active .c-menu__item__inner {
  border-left-color: #5f9cfd;
  background-color: #1e3e6f;
}
.c-menu > ul .c-menu__item.is-active .c-menu__item__inner i {
  color: #5f9cfd;
}
.c-menu > ul .c-menu__item.is-active .c-menu__item__inner .c-menu-item__title span {
  color: #5f9cfd;
}
.c-menu > ul .c-menu__item.is-active .c-menu__item__inner:before {
  height: 36px;
  opacity: 1;
}
.c-menu > ul .c-menu__item:not(.is-active):hover .c-menu__item__inner {
  background-color: #f5642d;
  border-left-color: #f5642d;
}
.c-menu > ul .c-menu__item i {
  flex: 0 0 70px;
  font-size: 18px;
  font-weight: normal;
  text-align: center;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.c-menu > ul .c-menu__item .c-menu-item__expand {
  position: relative;
  left: 100px;
  padding-right: 20px;
  margin-left: auto;
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
}
.sidebar-is-expanded .c-menu > ul .c-menu__item .c-menu-item__expand {
  left: 0px;
}
.c-menu > ul .c-menu__item .c-menu-item__title {
  flex-basis: 100%;
  padding-right: 10px;
  position: relative;
  left: 220px;
  opacity: 0;
  -webkit-transition: all 0.7s ease-in-out;
  -moz-transition: all 0.7s ease-in-out;
  -ms-transition: all 0.7s ease-in-out;
  -o-transition: all 0.7s ease-in-out;
  transition: all 0.7s ease-in-out;
}
.c-menu > ul .c-menu__item .c-menu-item__title span {
  font-weight: 400;
  font-size: 14px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.sidebar-is-expanded .c-menu > ul .c-menu__item .c-menu-item__title {
  left: 0px;
  opacity: 1;
}
.c-menu > ul .c-menu__item .c-menu__submenu {
  background-color: #051835;
  padding: 15px;
  font-size: 12px;
  display: none;
}
.c-menu > ul .c-menu__item .c-menu__submenu li {
  padding-bottom: 15px;
  margin-bottom: 15px;
  border-bottom: 1px solid;
  border-color: #072048;
  color: #5f9cfd;
}
.c-menu > ul .c-menu__item .c-menu__submenu li:last-child {
  margin: 0;
  padding: 0;
  border: 0;
}

main.l-main {
  width: 100%;
  height: 100%;
  padding: 70px 0 0 70px;
  -webkit-transition: padding 0.5s ease-in-out;
  -moz-transition: padding 0.5s ease-in-out;
  -ms-transition: padding 0.5s ease-in-out;
  -o-transition: padding 0.5s ease-in-out;
  transition: padding 0.5s ease-in-out;
}
main.l-main .content-wrapper {
  padding: 25px;
  height: 100%;
}
main.l-main .content-wrapper .page-content {
  border-top: 1px solid #d0d0d0;
  padding-top: 25px;
}
main.l-main .content-wrapper--with-bg .page-content {
  background: #fff;
  border-radius: 3px;
  border: 1px solid #d0d0d0;
  padding: 25px;
}
main.l-main .page-title {
  font-weight: 400;
  margin-top: 0;
  margin-bottom: 25px;
}
.sidebar-is-expanded main.l-main {
  padding-left: 220px;
}
</style>
