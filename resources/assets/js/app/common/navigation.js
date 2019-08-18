/**
 * Created by Kevin on 17.09.2017.
 */


+function ($) {

    /**
     * update styling for selected tab
     * */
    var initNavigationStyling = function () {
        var $NaviTabs = $('.navigation .menu ul li a'),
            sActiveTabClass = 'active-tab';

        $NaviTabs.on('click', function () {
            $NaviTabs.removeClass(sActiveTabClass);
            $(this).addClass(sActiveTabClass)
        });
    };

    /**
     * show the mobile navi list at click on hamburger menu
     * */
    var mobileMenu = function () {
        var $Button = $('.navigation .menu-mobile-button, .navigation .menu ul'),
            $NavigationList = $('.navigation .menu ul');

        $Button.on('click', function () {
            $NavigationList.toggleClass('show-mobile-list');
        });
    };

    initNavigationStyling();
    mobileMenu();

    //var oldBudget = 0,
    //    budget = 5000,
    //    years = 10,
    //    factor = 2;
    //
    //for (var i=0; i<years; i++) {
    //    oldBudget = budget;
    //    budget = budget * factor - ((budget * factor) - oldBudget) * 0.25;
    //    console.log('Jahr: ' + (i+1) + ' || Betrag nach Steuer: ' + budget);
    //}

} (jQuery);