(function() {
    var labels = document.querySelectorAll("label.toggle-btn");

    labels.forEach((label) => {
        $(label).keypress((e) => {
            if (e.keyCode == 13 || e.keyCode == 32) {
                var forID = label.getAttribute("for");
                var tabIndexes = document.querySelectorAll(
                    ".tabindex-" + forID
                );

                // Trigger click
                $(label).click();

                // Toggle related tabindex's
                tabIndexes &&
                    tabIndexes.forEach((obj) => {
                        var tabIndex = obj.getAttribute("tabIndex");
                        var tabIndexNew = tabIndex === "0" ? "-1" : "0";

                        obj.setAttribute("tabindex", tabIndexNew);
                    });

                return e.preventDefault();
            }
        });
    });
})();
