wp.customize.controlConstructor['xenial-typography'] = wp.customize.Control.extend({

    ready: function () {

        'use strict';

        let body = jQuery('body');

        let control = this;

        // Initialize SlimSelect to font family select element.
        let fontFamilySelectEle = control.container.find('#xenial-font-family-select-' + control.id);
        if (fontFamilySelectEle.length > 0) {
            new SlimSelect({
                select: '#xenial-font-family-select-' + control.id,
                showSearch: true,
                contentPosition: 'relative',
                settings: {
                    openPosition: 'down' // 'auto', 'up' or 'down'
                }
            });
        }

        // Initialize SlimSelect to font variants select element.
        let fontVariantsSelectEle = control.container.find('#xenial-font-variants-select-' + control.id);
        if (fontVariantsSelectEle.length > 0) {
            new SlimSelect({
                select: '#xenial-font-variants-select-' + control.id,
                showSearch: false,
                contentPosition: 'relative',
                settings: {
                    openPosition: 'down' // 'auto', 'up' or 'down'
                }
            });
        }

        // Initialize SlimSelect to font weight select element.
        let fontWeightSelectEle = control.container.find('#xenial-font-weight-select-' + control.id);
        if (fontWeightSelectEle.length > 0) {
            new SlimSelect({
                select: '#xenial-font-weight-select-' + control.id,
                showSearch: false,
                contentPosition: 'relative',
                settings: {
                    openPosition: 'down' // 'auto', 'up' or 'down'
                }
            });
        }

        // Execute event when font-family is changed.
        fontFamilySelectEle.on('change', function () {
            let thisFontFamilySelectEle = jQuery(this);
            // Get the font family.
            let fontSelectedOptionEle = thisFontFamilySelectEle.find('option[value="' + thisFontFamilySelectEle.val() + '"]');
            // Get the font variants.
            let fontVariants = fontSelectedOptionEle.data('variants');
            // Get the font source.
            let fontSource = fontSelectedOptionEle.data('source');

            // If Google font family is selected, font variants select will be displayed.
            let fontVariantsSelectWrapperEle = jQuery('#xenial-google-variants-select-wrapper-' + thisFontFamilySelectEle.data('control'));
            if (fontSource == 'google') {
                fontVariantsSelectWrapperEle.addClass('customize-display').removeClass('customize-hidden');
            } else {
                fontVariantsSelectWrapperEle.addClass('customize-hidden').removeClass('customize-display');
            }

            // Create new options for font variants select element. 
            createFontVariantsSelectOptions(fontVariants);
            // Create new options for font weight select element.
            createFontWeightSelectOptions();
        });

        // Creates new options for font variants select element.
        function createFontVariantsSelectOptions(fontVariants) {

            let fontVariantsArray = fontVariants.split(",");

            let fontVariantsOptionsEles = '';

            fontVariantsArray.forEach(function (fontVariant) {
                let modifiedFontVariant = modifiyFontVariant(fontVariant);
                if (modifiedFontVariant === '400') {
                    fontVariantsOptionsEles += `<option value="${modifiedFontVariant}" selected>${modifiedFontVariant}</option>`;
                } else {
                    fontVariantsOptionsEles += `<option value="${modifiedFontVariant}">${modifiedFontVariant}</option>`;
                }
            });

            fontVariantsSelectEle.html(fontVariantsOptionsEles);

            fontVariantsSelectEle.trigger('change');
        }

        // Creates new options for font weight select element.
        function createFontWeightSelectOptions() {

            let fontVariantsSelectEleVal = fontVariantsSelectEle.val();

            let fontVariantsArray = (fontVariantsSelectEleVal.length > 0) ? fontVariantsSelectEleVal : control.params.defaultFontWeights;
            let uniqueFontVariants = [];

            if (fontVariantsArray.length > 0) {
                fontVariantsArray.forEach(function (fontVariant) {
                    if (!uniqueFontVariants.includes(parseInt(fontVariant))) {
                        uniqueFontVariants.push(parseInt(fontVariant));
                    }
                });
            }

            let fontVariantsOptionsEles = '<option value="inherit" selected>Inherit</option>';

            if (uniqueFontVariants.length > 0) {
                uniqueFontVariants.forEach(function (uniqueFontVariant) {
                    fontVariantsOptionsEles += '<option value="' + uniqueFontVariant + '">' + uniqueFontVariant + '</option>';
                });
            }

            fontWeightSelectEle.html(fontVariantsOptionsEles);
        }

        // Updates options for font weight select element when new font variants are selected.
        function updateFontWeightSelectOptions() {

            let fontVariantsSelectEleVal = fontVariantsSelectEle.val();

            let fontWeightSelectEleVal = fontWeightSelectEle.val();

            let fontVariantsArray = (fontVariantsSelectEleVal.length > 0) ? fontVariantsSelectEleVal : control.params.defaultFontWeights;

            let uniqueFontVariants = [];

            if (fontVariantsArray.length > 0) {
                fontVariantsArray.forEach(function (fontVariant) {
                    if (!uniqueFontVariants.includes(parseInt(fontVariant))) {
                        uniqueFontVariants.push(parseInt(fontVariant));
                    }
                });
            }

            let fontVariantsOptionsEles = '<option value="inherit" selected>Inherit</option>';

            if (uniqueFontVariants.length > 0) {
                uniqueFontVariants.forEach(function (uniqueFontVariant) {
                    if (parseInt(fontWeightSelectEleVal) === uniqueFontVariant) {
                        fontVariantsOptionsEles += '<option value="' + uniqueFontVariant + '" selected>' + uniqueFontVariant + '</option>';
                    } else {
                        fontVariantsOptionsEles += '<option value="' + uniqueFontVariant + '">' + uniqueFontVariant + '</option>';
                    }

                });
            }

            fontWeightSelectEle.html(fontVariantsOptionsEles);
        }

        // Modifies 'regular' and 'italic' google font variants to '400' and '400italic'.
        function modifiyFontVariant(fontVariant) {

            let returnFontVariant;
            switch (fontVariant) {
                case 'regular':
                    returnFontVariant = '400';
                    break;
                case 'italic':
                    returnFontVariant = '400italic';
                    break;
                default:
                    returnFontVariant = fontVariant;
            }

            return returnFontVariant;
        }

        // On font-family change.
        body.on('change', '#xenial-font-family-select-' + control.id, function (event) {
            event.preventDefault();
            let thisEle = jQuery(this);
            let settingValue = getSettingValue(control.id);

            let fontFamily = thisEle.val();
            let fontSource = thisEle.find('option[value="' + fontFamily + '"]').data('source');

            settingValue.source = fontSource;
            settingValue.font_family = fontFamily;

            if (fontSource === 'google') {
                fontVariantsSelectEle.val('400');
                settingValue.font_variants = '400';

                let googleFontURL = generateGoogleFontURL(settingValue.font_family, settingValue.font_variants);
                settingValue.font_url = googleFontURL;

                let fontURLEle = jQuery('#xenial-font-url-' + control.id);
                fontURLEle.val(googleFontURL);
            } else {
                fontVariantsSelectEle.val('');
                settingValue.font_variants = '';
            }

            fontWeightSelectEle.val('inherit');
            settingValue.font_weight = 'inherit';

            saveSetting(control.id, settingValue);
        });

        // On font-variants change.
        body.on('change', '#xenial-font-variants-select-' + control.id, function (event) {
            event.preventDefault();
            let thisEle = jQuery(this);
            let fontVariants = thisEle.val();
            let settingValue = getSettingValue(control.id);
            settingValue.font_variants = fontVariants.join();

            if (settingValue.source === 'google') {

                let googleFontURL = generateGoogleFontURL(settingValue.font_family, settingValue.font_variants);
                settingValue.font_url = googleFontURL;

                let fontURLEle = jQuery('#xenial-font-url-' + control.id);
                fontURLEle.val(googleFontURL);
            } else {
                fontWeightSelectEle.val('inherit');
                settingValue.font_weight = 'inherit';
            }

            saveSetting(control.id, settingValue);

            updateFontWeightSelectOptions();
        });

        // On font-weight change.
        body.on('change', '#xenial-font-weight-select-' + control.id, function (event) {
            event.preventDefault();
            let thisEle = jQuery(this);
            let fontWeight = thisEle.val();
            let settingValue = getSettingValue(control.id);
            settingValue.font_weight = fontWeight;

            saveSetting(control.id, settingValue);
        });

        let devices = ['desktop', 'tablet', 'mobile', 'normal'];

        devices.forEach(function (device) {

            // On font-size change.
            body.on('change', '#xenial-' + device + '-font-size-' + control.id, function (event) {
                event.preventDefault();
                let thisEle = jQuery(this);
                let settingValue = getSettingValue(control.id);
                let targetDevice = thisEle.data('device');
                switch (targetDevice) {
                    case 'desktop':
                        settingValue.font_sizes.desktop.value = thisEle.val();
                        break;
                    case 'tablet':
                        settingValue.font_sizes.tablet.value = thisEle.val();
                        break;
                    case 'mobile':
                        settingValue.font_sizes.mobile.value = thisEle.val();
                        break;
                    default:
                        settingValue.font_size.value = thisEle.val();
                }
                saveSetting(control.id, settingValue);
            });

            // On font-size unit change.
            body.on('change', '#xenial-' + device + '-font-size-unit-input-' + control.id, function (event) {
                event.preventDefault();
                let thisEle = jQuery(this);
                let settingValue = getSettingValue(control.id);
                let targetDevice = thisEle.data('device');

                let fontSizeInputEle = jQuery('#xenial-' + targetDevice + '-font-size-' + control.id);

                if (thisEle.val() === 'rem' || thisEle.val() === 'em') {
                    let fontSizeInputEleVal = fontSizeInputEle.val();
                    console.log(typeof fontSizeInputEleVal);

                    if (typeof fontSizeInputEleVal === 'string' && fontSizeInputEleVal.includes('.')) {
                        fontSizeInputEleVal = parseFloat(fontSizeInputEleVal).toFixed(1);
                    } else {
                        fontSizeInputEleVal = Number(fontSizeInputEleVal);
                    }

                    console.log(Number.isInteger(fontSizeInputEleVal));
                    if (Number.isInteger(fontSizeInputEleVal)) {
                        fontSizeInputEleVal = parseFloat(fontSizeInputEleVal / 16).toFixed(1);
                    }
                    console.log(fontSizeInputEleVal);
                    fontSizeInputEle.attr('step', '0.1');
                    fontSizeInputEle.val(fontSizeInputEleVal);
                } else {

                    let fontSizeInputEleVal = fontSizeInputEle.val();

                    if (typeof fontSizeInputEleVal === 'string' && fontSizeInputEleVal.includes('.')) {
                        fontSizeInputEleVal = parseFloat(fontSizeInputEleVal).toFixed(1);
                    } else {
                        fontSizeInputEleVal = Number(fontSizeInputEleVal);
                    }

                    fontSizeInputEleVal = parseInt(fontSizeInputEleVal * 16);

                    fontSizeInputEle.attr('step', '1');
                    fontSizeInputEle.val(fontSizeInputEleVal);
                }

                if (thisEle.val())
                    switch (targetDevice) {
                        case 'desktop':
                            settingValue.font_sizes.desktop.unit = thisEle.val();
                            break;
                        case 'tablet':
                            settingValue.font_sizes.tablet.unit = thisEle.val();
                            break;
                        case 'mobile':
                            settingValue.font_sizes.mobile.unit = thisEle.val();
                            break;
                        default:
                            settingValue.font_size.unit = thisEle.val();
                    }
                saveSetting(control.id, settingValue);
            });

            // On line-height change.
            body.on('change', '#xenial-' + device + '-line-height-' + control.id, function (event) {
                event.preventDefault();
                let thisEle = jQuery(this);
                let settingValue = getSettingValue(control.id);
                let targetDevice = thisEle.data('device');
                switch (targetDevice) {
                    case 'desktop':
                        settingValue.line_heights.desktop = thisEle.val();
                        break;
                    case 'tablet':
                        settingValue.line_heights.tablet = thisEle.val();
                        break;
                    case 'mobile':
                        settingValue.line_heights.mobile = thisEle.val();
                        break;
                    default:
                        settingValue.line_height = thisEle.val();
                }
                saveSetting(control.id, settingValue);
            });

            // On letter-spacing change.
            body.on('change', '#xenial-' + device + '-letter-spacing-' + control.id, function (event) {
                event.preventDefault();
                let thisEle = jQuery(this);
                let settingValue = getSettingValue(control.id);
                let targetDevice = thisEle.data('device');
                switch (targetDevice) {
                    case 'desktop':
                        settingValue.letter_spacings.desktop.value = thisEle.val();
                        break;
                    case 'tablet':
                        settingValue.letter_spacings.tablet.value = thisEle.val();
                        break;
                    case 'mobile':
                        settingValue.letter_spacings.mobile.value = thisEle.val();
                        break;
                    default:
                        settingValue.letter_spacing.value = thisEle.val();
                }
                saveSetting(control.id, settingValue);
            });

            // On letter-spacing unit change.
            body.on('change', '#xenial-' + device + '-letter-spacing-unit-input-' + control.id, function (event) {
                event.preventDefault();
                let thisEle = jQuery(this);
                let settingValue = getSettingValue(control.id);
                let targetDevice = thisEle.data('device');

                let letterSpacingInputEle = jQuery('#xenial-' + targetDevice + '-letter-spacing-' + control.id);

                if (thisEle.val() === 'rem' || thisEle.val() === 'em') {

                    let letterSpacingInputEleVal = letterSpacingInputEle.val();

                    if (typeof letterSpacingInputEleVal === 'string' && letterSpacingInputEleVal.includes('.')) {
                        letterSpacingInputEleVal = parseFloat(letterSpacingInputEleVal).toFixed(1);
                    } else {
                        letterSpacingInputEleVal = Number(letterSpacingInputEleVal);
                    }

                    if (Number.isInteger(letterSpacingInputEleVal)) {
                        letterSpacingInputEleVal = parseFloat(letterSpacingInputEleVal / 16).toFixed(1);
                    }

                    letterSpacingInputEle.attr('step', '0.1');
                    letterSpacingInputEle.val(letterSpacingInputEleVal);
                } else {

                    let letterSpacingInputEleVal = letterSpacingInputEle.val();

                    if (typeof letterSpacingInputEleVal === 'string' && letterSpacingInputEleVal.includes('.')) {
                        letterSpacingInputEleVal = parseFloat(letterSpacingInputEleVal).toFixed(1);
                    } else {
                        letterSpacingInputEleVal = Number(letterSpacingInputEleVal);
                    }

                    letterSpacingInputEleVal = parseInt(letterSpacingInputEleVal * 16);

                    letterSpacingInputEle.attr('step', '1');
                    letterSpacingInputEle.val(letterSpacingInputEleVal);
                }

                switch (targetDevice) {
                    case 'desktop':
                        settingValue.letter_spacings.desktop.unit = thisEle.val();
                        break;
                    case 'tablet':
                        settingValue.letter_spacings.tablet.unit = thisEle.val();
                        break;
                    case 'mobile':
                        settingValue.letter_spacings.mobile.unit = thisEle.val();
                        break;
                    default:
                        settingValue.letter_spacing.unit = thisEle.val();
                }
                saveSetting(control.id, settingValue);
            });
        });

        // On text-style change.
        body.on('change', '#xenial-typography-font-style-input-' + control.id, function (event) {
            event.preventDefault();
            let thisEle = jQuery(this);
            let settingValue = getSettingValue(control.id);

            settingValue.font_style = thisEle.val();

            saveSetting(control.id, settingValue);
        });

        // On text-transform change.
        body.on('change', '#xenial-typography-text-transform-input-' + control.id, function (event) {
            event.preventDefault();
            let thisEle = jQuery(this);
            let settingValue = getSettingValue(control.id);

            settingValue.text_transform = thisEle.val();

            saveSetting(control.id, settingValue);
        });

        let fontSizeSliders = [
            control.container.find('.xenial-slider.xenial-slider-font-size.desktop-slider'),
            control.container.find('.xenial-slider.xenial-slider-font-size.tablet-slider'),
            control.container.find('.xenial-slider.xenial-slider-font-size.mobile-slider'),
            control.container.find('.xenial-slider.xenial-slider-font-size.normal-slider'),
            control.container.find('.xenial-slider.xenial-slider-line-height.desktop-slider'),
            control.container.find('.xenial-slider.xenial-slider-line-height.tablet-slider'),
            control.container.find('.xenial-slider.xenial-slider-line-height.mobile-slider'),
            control.container.find('.xenial-slider.xenial-slider-line-height.normal-slider'),
            control.container.find('.xenial-slider.xenial-slider-letter-spacing.desktop-slider'),
            control.container.find('.xenial-slider.xenial-slider-letter-spacing.tablet-slider'),
            control.container.find('.xenial-slider.xenial-slider-letter-spacing.mobile-slider'),
            control.container.find('.xenial-slider.xenial-slider-letter-spacing.normal-slider')
        ];

        // Initialize sliders using jQuery slider UI.
        fontSizeSliders.forEach(function (fontSizeSlider) {
            let fontSizeSliderInput = fontSizeSlider.next('.xenial-slider-input').find('input.slider-input');
            fontSizeSlider.slider({
                range: 'min',
                value: fontSizeSliderInput.val(),
                min: +fontSizeSliderInput.attr('min'),
                max: +fontSizeSliderInput.attr('max'),
                step: +fontSizeSliderInput.attr('step'),
                slide: function (event, ui) {
                    fontSizeSliderInput.val(ui.value).keyup().trigger('change');
                },
                change: function (event, ui) {
                    fontSizeSliderInput.val(ui.value);
                }
            });
        });


        // On font-size reset event.
        body.on('click', '#xenial-font-size-reset-' + control.id, function (event) {
            event.preventDefault();
            let controlID = jQuery(this).data('control');
            let devices = ['desktop', 'tablet', 'mobile', 'normal'];
            devices.forEach(function (device) {
                // Reset font-size input value.
                let fontSizeInputEle = jQuery('#xenial-' + device + '-font-size-' + controlID);
                fontSizeInputEle.val(fontSizeInputEle.data('default')).trigger('change');
                // Reset font-size unit input value.
                let fontSizeUnitInputEle = jQuery('#xenial-' + device + '-font-size-unit-input-' + controlID);
                fontSizeUnitInputEle.val(fontSizeUnitInputEle.data('default')).trigger('change');
                // Reset font-size unit button text.
                let fontSizeUnitButtonEle = jQuery('#xenial-' + device + '-font-size-unit-' + controlID);
                fontSizeUnitButtonEle.find('span').html(fontSizeUnitInputEle.data('default'));
            });
        });

        // On line-height reset event.
        body.on('click', '#xenial-line-height-reset-' + control.id, function (event) {
            event.preventDefault();
            let devices = ['desktop', 'tablet', 'mobile', 'normal'];
            devices.forEach(function (device) {
                // Reset line-height input value.
                let lineHeightInputEle = jQuery('#xenial-' + device + '-line-height-' + control.id);
                lineHeightInputEle.val(lineHeightInputEle.data('default')).trigger('change');
            });
        });

        // On letter-spacing reset event.
        body.on('click', '#xenial-letter-spacing-reset-' + control.id, function (event) {
            event.preventDefault();
            let devices = ['desktop', 'tablet', 'mobile', 'normal'];
            devices.forEach(function (device) {
                // Reset letter-spacing input value.
                let letterSpacingInputEle = jQuery('#xenial-' + device + '-letter-spacing-' + control.id);
                letterSpacingInputEle.val(letterSpacingInputEle.data('default')).trigger('change');
                // Reset letter-spacing unit input value.
                let letterSpacingUnitInputEle = jQuery('#xenial-' + device + '-letter-spacing-unit-input-' + control.id);
                letterSpacingUnitInputEle.val(letterSpacingUnitInputEle.data('default')).trigger('change');
                // Reset letter-spacing unit button text.
                let letterSpacingUnitButtonEle = jQuery('#xenial-' + device + '-letter-spacing-unit-' + control.id);
                letterSpacingUnitButtonEle.find('span').html(letterSpacingUnitInputEle.data('default'));
            });
        });


        // On text-style reset event.
        body.on('click', '#xenial-text-style-reset-' + control.id, function (event) {
            event.preventDefault();
            // Reset text-style input value.
            let textStyleInputEle = jQuery('#xenial-typography-font-style-input-' + control.id);
            let textStyleDefaultValue = textStyleInputEle.data('default');
            textStyleInputEle.val(textStyleDefaultValue).trigger('change');
            // Reset text-style buttons.
            let textStyleButton = jQuery('#xenial-font-style-' + textStyleDefaultValue + '-' + control.id);
            textStyleButton.addClass('active').siblings().removeClass('active');
        });

        // On text-transform reset event.
        body.on('click', '#xenial-text-transform-reset-' + control.id, function (event) {
            event.preventDefault();
            // Reset text-transform input value.
            let textTransformInputEle = jQuery('#xenial-typography-text-transform-input-' + control.id);
            let textTransformDefaultValue = textTransformInputEle.data('default');
            textTransformInputEle.val(textTransformDefaultValue).trigger('change');
            // Reset text-transform buttons.
            let textTransformButton = jQuery('#xenial-text-transform-' + textTransformDefaultValue + '-' + control.id);
            textTransformButton.addClass('active').siblings().removeClass('active');
        });

        // JSON stringify the changed value and save the setting, and input field value.
        function saveSetting(controlID, newSettingValue) {
            let settingInputEle = jQuery('#xenial-typography-control-value-' + controlID);
            let stringifyNewSettingValue = JSON.stringify(newSettingValue);
            settingInputEle.val(stringifyNewSettingValue).trigger('change');
            control.setting.set(stringifyNewSettingValue);
        }

        // Get the setting value.
        function getSettingValue(controlID) {
            let settingInputEle = jQuery('#xenial-typography-control-value-' + controlID);
            return JSON.parse(settingInputEle.val());
        }


        // Generates Google Font URL.
        function generateGoogleFontURL(fontFamily, fontWeights) {

            let modifiedFontFamily = fontFamily.replace(' ', '+');

            if (fontWeights) {

                let fontVariantsArray = fontWeights.split(',');

                let normalVariantsArray = [];
                let italicVariantsArray = [];

                fontVariantsArray.forEach(function (fontVariant) {
                    if (fontVariant.includes('italic')) {
                        italicVariantsArray.push(parseInt(fontVariant));
                    } else {
                        normalVariantsArray.push(parseInt(fontVariant));
                    }
                });

                normalVariantsArray.sort();
                italicVariantsArray.sort();

                let normalVariantsCount = normalVariantsArray.length;
                let italicVariantsCount = italicVariantsArray.length;

                let fontURL = '';

                if (normalVariantsCount === 0) {

                    if (italicVariantsCount >= 1) {

                        if (italicVariantsCount === 1) {

                            if (italicVariantsArray[0] === 400) {

                                fontURL += modifiedFontFamily + ':ital@1';
                            } else {

                                fontURL += modifiedFontFamily + ':ital,wght@1,' + String(italicVariantsArray[0]);
                            }
                        } else {

                            let italicVariantsStringArray = [];

                            italicVariantsArray.forEach(function (italicVariant) {
                                italicVariantsStringArray.push('1,' + italicVariant);
                            });
                            let italicVariantsString = italicVariantsStringArray.join(';');

                            fontURL += modifiedFontFamily + ':ital,wght@' + italicVariantsString;
                        }
                    }
                } else if (normalVariantsCount === 1) {

                    if (italicVariantsCount === 0) {

                        if (normalVariantsArray[0] !== 400) {

                            fontURL += modifiedFontFamily + ':wght@' + normalVariantsArray[0];
                        } else {

                            fontURL += modifiedFontFamily;
                        }
                    } else if (italicVariantsCount === 1) {

                        if (italicVariantsArray[0] === 400) {

                            if (normalVariantsArray[0] !== 400) {

                                fontURL += modifiedFontFamily + ':ital,wght@0,' + normalVariantsArray[0] + ';1,400';
                            } else {

                                fontURL += modifiedFontFamily + ':ital@0;1';
                            }
                        } else {

                            fontURL += modifiedFontFamily + ':ital,wght@0,' + normalVariantsArray[0] + ';1,' + italicVariantsArray[0];
                        }
                    } else {

                        fontURL += modifiedFontFamily + ':ital,wght@0,' + normalVariantsArray[0];

                        let italicVariantsStringArray = [];

                        italicVariantsArray.forEach(function (italicVariant) {
                            italicVariantsStringArray.push('1,' + italicVariant);
                        });
                        let italicVariantsString = italicVariantsStringArray.join(';');

                        fontURL += ';' + italicVariantsString;
                    }
                } else {

                    if (italicVariantsCount === 0) {

                        fontURL += modifiedFontFamily + ':wght@';

                        let normalVariantsString = normalVariantsArray.join(';');

                        fontURL += normalVariantsString;
                    } else if (italicVariantsCount === 1) {

                        fontURL += modifiedFontFamily + ':ital,wght@';

                        let normalVariantsStringArray = [];

                        normalVariantsArray.forEach(function (normalVariant) {
                            normalVariantsStringArray.push('0,' + normalVariant);
                        });
                        let normalVariantsString = normalVariantsStringArray.join(';');

                        fontURL += normalVariantsString + ';1,' + italicVariantsArray[0];

                    } else {

                        fontURL += modifiedFontFamily + ':ital,wght@';

                        let normalVariantsStringArray = [];

                        normalVariantsArray.forEach(function (normalVariant) {
                            normalVariantsStringArray.push('0,' + normalVariant);
                        });
                        let normalVariantsString = normalVariantsStringArray.join(';');

                        fontURL += normalVariantsString + ';';

                        let italicVariantsStringArray = [];

                        italicVariantsArray.forEach(function (italicVariant) {
                            italicVariantsStringArray.push('1,' + italicVariant);
                        });
                        let italicVariantsString = italicVariantsStringArray.join(';');

                        fontURL += italicVariantsString;
                    }
                }

                return fontURL;
            }

            return false;
        }
    }
});