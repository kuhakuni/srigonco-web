// const { functions } = require("lodash");
(function () {
    "use strict";
    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim();
        if (all) {
            return [...document.querySelectorAll(el)];
        } else {
            return document.querySelector(el);
        }
    };

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        if (all) {
            select(el, all).forEach((e) => e.addEventListener(type, listener));
        } else {
            select(el, all).addEventListener(type, listener);
        }
    };

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => {
        el.addEventListener("scroll", listener);
    };

    /**
     * Sidebar toggle
     */
    if (select(".toggle-sidebar-btn")) {
        on("click", ".toggle-sidebar-btn", function (e) {
            select("body").classList.toggle("toggle-sidebar");
        });
    }

    /**
     * Toggle .navbar-scrolled class to #navbar when page is scrolled
     */
    let selectNavbar = select(".navbar");
    if (selectNavbar) {
        const navbarScrolled = () => {
            if (window.scrollY > 50) {
                selectNavbar.classList.add("navbar-scrolled");
            } else {
                selectNavbar.classList.remove("navbar-scrolled");
            }
        };
        window.addEventListener("load", navbarScrolled);
        onscroll(document, navbarScrolled);
    }

    /**
     * Back to top button
     */
    let backtotop = select(".back-to-top");
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add("active");
            } else {
                backtotop.classList.remove("active");
            }
        };
        window.addEventListener("load", toggleBacktotop);
        onscroll(document, toggleBacktotop);
    }

    /**
     * Initiate tooltips
     */
    let tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    /**
     * Initiate Bootstrap validation check
     */
    let needsValidation = document.querySelectorAll(".needs-validation");
    Array.prototype.slice.call(needsValidation).forEach((form) => {
        form.addEventListener(
            "submit",
            (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add("was-validated");
            },
            false
        );
    });

    
    // window.addEventListener('load',(e) => {
    //     console.log("test");
    //     const modal = document.getElementById('modal'); 
    //     // modal.modal("show")
    // })

    document.addEventListener('DOMContentLoaded', () => {
        
        document.getElementById('btn-modal').click();
    }, false)

})();


