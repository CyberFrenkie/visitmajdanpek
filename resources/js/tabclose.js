document.addEventListener("DOMContentLoaded", function() {
    var tabButtons = document.querySelectorAll(".readMore[data-bs-toggle='tab']");
    var tabContents = document.querySelectorAll(".tab-pane");

    function toggleTabContent(tabContent) {
        var isVisible = tabContent.classList.contains("show");
        if (isVisible) {
            tabContent.style.opacity = '0';
            setTimeout(function () {
                tabContent.classList.remove("show", "active");
                tabButtons.forEach(function (button) {
                    button.classList.remove("active");
                })
            }, 300);
        } else {
            tabContent.style.opacity = '0';
            tabContent.classList.add("show", "active");
            setTimeout(function () {
                tabContent.style.opacity = '1';
            }, 10);
        }
    }

    tabButtons.forEach(function (button) {
 button.addEventListener("click", function() {
            var targetTabId = button.getAttribute("data-bs-target");
            var targetTabContent = document.querySelector(targetTabId);
            var isCurrentlyActive = targetTabContent.classList.contains("show");
            
            if (isCurrentlyActive) {
                toggleTabContent(targetTabContent);
            } else {
                toggleTabContent(targetTabContent);
                tabButtons.forEach(function (btn) {
                    btn.classList.remove("active");
                });
                button.classList.add("active");
            }
        });
    });
});