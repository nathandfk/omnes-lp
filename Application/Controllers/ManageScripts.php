<?php

function head () {
    echo set_style("ualp-intl-tel-input-css", "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css");
    echo set_style("ualp-base-css", DIR_CSS . "ualp-base.css");
    echo set_style("ualp-layout-css", DIR_CSS . "ualp-layout.css");
    echo set_style("ualp-modules-css", DIR_CSS . "ualp-modules.css");
    echo set_style("ualp-states-css", DIR_CSS . "ualp-states.css");
    echo set_style("ualp-states-css", DIR_CSS . "ualp-theme.css");
    echo set_style("ualp-responsive-css", DIR_CSS . "ualp-wresponsive.css");
    echo set_style("ualp-responsive-css", "https://use.fontawesome.com/releases/v5.15.4/css/all.css");
    echo set_script("ualp-script-js", "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js", true);
    echo set_script("ualp-script-js", DIR_JS . "ualp-event.js", true);
	
}