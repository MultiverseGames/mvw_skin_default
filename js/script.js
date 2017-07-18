var pageRegistry = [
    'base',
    'population',
    'research',
];

function commaSeparateNumber(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) {
        val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    return val;
}

/**
 * Get the current page
 * @returns String - name of page file, not including extension
 */
function getPage() {
    var fullpath = location.pathname.substring(1).split(".")[0];
    var subpath = fullpath.split("/");

    var page = subpath.pop();

    if (page === "main") {
        var queryString = location.search.substring(1);
        page = queryString.split("/")[0];
    }

    return page;
}

var page = getPage();

if (pageRegistry.includes(page)) {
    $.getScript("gamestyles/default/js/pages/" + page + ".js").then(function () {
        //   console.log(arguments);
    });
}


