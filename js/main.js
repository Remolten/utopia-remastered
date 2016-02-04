/*
    Copyright 2015-2016 Remington Thurber
    Created for New Life Assembly of God in Ellendale, ND
*/

(function($) {

	var $window = $(window);

	$window.on('load', function() {
        
        var	$body = $('body'),
            $panels = $('.apanel'),
            $hbw = $('html,body,window'),
            $footer = $('#footer'),
            $wrapper = $('#wrapper'),
            $nav = $('.navbar'), $nav_links = $nav.find('li'),
            panels = [],
            panelIDS = [],
            activePanelId = null,
            nextPanelID = null,
            fadeSpeed = 350; // 400 initial value
            hash = location.hash.substring(1);
        
        // Add active flair to navbar with current location
        // Still flickers on load but there is not a better way atm
        if (hash != '' && hash != '#') {
            $nav_links.filter('[id="' + hash + '-nav"]').addClass('active');
        }
        
        else {
            $nav_links.filter('[id="home-nav"]').addClass('active');
            activePanelId = 'home';
        }
        
        // Enable tooltips
        $('[data-toggle="tooltip"]').tooltip();
        
        $panels.each(function(i) {
            var t = $(this), id = t.attr('id');

            panels[id] = t;
            panelIDS.push(id);
            
            if (id == hash) {
                activePanelId = id;
            }
        });
        
        panels[activePanelId].show();

        // Detect plink presses
        $('.plink').on('click', function(e) {
            e.preventDefault();
            hash = $(this).attr('href').substring(1);
            changePanel(hash);
        });
        
        // Detect arrow key presses and change panel
        document.onkeydown = function(e) {
            switch(e.keyCode) {
                case 37:
                    parseKey(37); // left
                    break;        
                case 39:
                    parseKey(39); // right
                    break;
            }
        };

        function parseKey(key) {
            var mod;
            var done = false;
            
            if (key == 37) {
                mod = -1;
            }
            
            else if (key == 39) {
                mod = 1;
            }
            
            for (i in panelIDS) {
                if (panelIDS[i] == activePanelId && !done) {
                    if (!(i == panelIDS.length - 1 && mod == 1) && !(i == 0 && mod == -1)) {
                        changePanel(panelIDS[+i + mod]); //+i = string > int
                        // Broken on https, remove anyways
                        //history.pushState({}, '', '#' + panelIDS[+i + mod]);
                        done = true;
                    } 
                }
            }
        }
        
        // TODO We need to force hide if we are already two panels beyond
        function changePanel(hash) {
            nextPanelID = hash;
            
            $nav_links.removeClass('active');
            $nav_links.filter('[id="' + nextPanelID + '-nav"]').addClass('active');
            
            if (nextPanelID != activePanelId) {
                panels[activePanelId].fadeOut(fadeSpeed, function() {
                    panels[nextPanelID].fadeIn(fadeSpeed);
                });
                activePanelId = nextPanelID;
            }
            
        }
        
	});

})(jQuery);