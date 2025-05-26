@extends('master')

@section('content')

<style>
        .icon-container {
            display: flex;
            flex-wrap: wrap;
        }
        .icon {
            margin: 10px;
            text-align: center;
        }
        .icon img {
            width: 24px; /* Atur ukuran sesuai kebutuhan */
            height: 24px; /* Atur ukuran sesuai kebutuhan */
        }
</style>


<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Icons</h1>
    </div>
    You can explore variants of icon at
    <br>
    <ul>
        <li> <a href="https://fontawesome.com/search?q=search&o=r">Fontawesome</a></li>
        <li><a href="https://feathericons.com/">Feather</a></li>
        <li> <a href="https://primer.style/foundations/icons/">Octicons</a></li>
    </ul>
</div>



     {{-- <div class="col-lg-12">
           
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Icon</h6>
                </div>
                <div class="card-body">
                    The styling for this basic card example is created by using default Bootstrap
                    utility classes. By using utility classes, the style of the card component can be
                    easily modified with no need for any custom CSS!

                    <div class="icon-container d-flex flex-column align-items-center justify-content-center mt-4">
                            @php
                                $icons = [
                                    'add-1--expand-cross-buttons-button-more-remove-plus-add--mathematics-math.svg',
                                    'add-bell-notification--notification-alarm-alert-bell-add.svg',
                                    'add-circle--button-remove-cross-add-buttons-plus-circle--mathematics-math.svg',
                                    'add-layer-2--layer-add-design-plus-layers-square-box.svg',
                                    'add-square--square-remove-cross-buttons-add-plus-button--mathematics-math.svg',
                                    'alarm-clock--time-tock-stopwatch-measure-clock-tick.svg',
                                    'align-back-1--back-design-layer-layers-pile-stack-arrange-square.svg',
                                    'align-center--text-alignment-align-paragraph-centered-formatting-center.svg',
                                    'align-front-1--design-front-layer-layers-pile-stack-arrange-square.svg',
                                    'align-left--paragraph-text-alignment-align-left-formatting-right.svg',
                                    'align-right--rag-paragraph-text-alignment-align-right-formatting-left.svg',
                                    'ampersand.svg',
                                    'archive-box--box-content-banker-archive-file.svg',
                                    'arrow-bend-left-down-2--arrow-bend-curve-change-direction-left-to-down.svg',
                                    'arrow-bend-right-down-2--arrow-bend-curve-change-direction-right-to-down.svg',
                                    'arrow-crossover-down--cross-move-over-arrow-arrows-down.svg',
                                    'arrow-crossover-left--cross-move-over-arrow-arrows-left.svg',
                                    'arrow-crossover-right--cross-move-over-arrow-arrows-ight.svg',
                                    'arrow-crossover-up--cross-move-over-arrow-arrows-right.svg',
                                    'arrow-cursor-1--mouse-select-cursor.svg',
                                    'arrow-cursor-2--mouse-select-cursor.svg',
                                    'arrow-curvy-up-down-1--both-direction-arrow-curvy-diagram-zigzag-vertical.svg',
                                    'arrow-curvy-up-down-2.svg',
                                    'arrow-down-2--down-move-arrow-arrows.svg',
                                    'arrow-down-dashed-square--arrow-keyboard-button-down-square-dashes.svg',
                                    'arrow-expand--expand-small-bigger-retract-smaller-big.svg',
                                    'arrow-infinite-loop--arrow-diagram-loop-infinity-repeat.svg',
                                    'arrow-move--move-button-arrows-direction.svg',
                                    'arrow-reload-horizontal-1--arrows-load-arrow-sync-square-loading-reload-synchronize.svg',
                                    'arrow-reload-horizontal-2.svg',
                                    'arrow-reload-vertical-1--arrows-load-arrow-sync-square-loading-reload-synchronize.svg',
                                    'arrow-reload-vertical-2.svg',
                                    'arrow-roadmap.svg',
                                    'arrow-round-left--diagram-round-arrow-left.svg',
                                    'arrow-round-right--diagram-round-arrow-right.svg',
                                    'arrow-shrink--expand-retract-shrink-bigger-big-small-smaller.svg',
                                    'arrow-shrink-diagonal-1--expand-retract-shrink-bigger-big-small-smaller.svg',
                                    'arrow-shrink-diagonal-2--expand-retract-shrink-bigger-big-small-smaller.svg',
                                    'arrow-transfer-diagonal-1--arrows-arrow-server-data-diagonal-internet-transfer-network.svg',
                                    'arrow-transfer-diagonal-2--arrows-arrow-server-data-diagonal-internet-transfer-network.svg',
                                    'arrow-transfer-diagonal-3--arrows-arrow-server-data-diagonal-internet-transfer-network.svg',
                                    'arrow-up-1--arrow-up-keyboard.svg',
                                    'arrow-up-dashed-square--arrow-keyboard-button-up-square-dashes.svg',
                                    'ascending-number-order.svg',
                                    'attribution.svg',
                                    'blank-calendar--blank-calendar-date-day-month-empty.svg',
                                    'blank-notepad--content-notes-book-notepad-notebook.svg',
                                    'block-bell-notification--notification-alarm-alert-bell-block.svg',
                                    'bomb--delete-bomb-remove.svg',
                                    'bookmark--bookmarks-tags-favorite.svg',
                                    'braces-circle--interface-math-braces-sign-mathematics.svg',
                                    'brightness-1--bright-adjust-brightness-adjustment-sun-raise-controls.svg',
                                    'brightness-2--bright-adjust-brightness-adjustment-sun-raise-controls-half.svg',
                                    'brightness-3--bright-adjust-brightness-adjustment-sun-raise-controls-dot-small.svg',
                                    'broken-link-2--break-broken-hyperlink-link-remove-unlink-chain.svg',
                                    'bullet-list--points-bullet-unordered-list-lists-bullets.svg',
                                    'calendar-add--add-calendar-date-day-month.svg',
                                    'calendar-edit--calendar-date-day-compose-edit-note.svg',
                                    'calendar-jump-to-date.svg',
                                    'calendar-star--calendar-date-day-favorite-like-month-star.svg',
                                    'celsius--degrees-temperature-centigrade-celsius-degree-weather.svg',
                                    'check--check-form-validation-checkmark-success-add-addition-tick.svg',
                                    'check-square--check-form-validation-checkmark-success-add-addition-box-square-tick.svg',
                                    'circle--geometric-circle-round-design-shape-shapes-shape.svg',
                                    'circle-clock--clock-loading-measure-time-circle.svg',
                                    'clipboard-add--edit-task-edition-add-clipboard-form.svg',
                                    'clipboard-check--checkmark-edit-task-edition-checklist-check-success-clipboard-form.svg',
                                    'clipboard-remove--edit-task-edition-remove-delete-clipboard-form.svg',
                                    'cloud--cloud-meteorology-cloudy-overcast-cover-weather.svg',
                                    'cog--work-loading-cog-gear-settings-machine.svg',
                                    'color-palette--color-palette-company-office-supplies-work.svg',
                                    'color-picker--color-colors-design-dropper-eye-eyedrop-eyedropper-painting-picker.svg',
                                    'color-swatches--color-colors-design-painting-palette-sample-swatch.svg',
                                    'cone-shape.svg',
                                    'convert-PDF-2--essential-files-folder-convert-to-PDF.svg',
                                    'copy-paste--clipboard-copy-cut-paste.svg',
                                    'creative-commons.svg',
                                    'crop-selection--artboard-crop-design-image-picture.svg',
                                    'crown--reward-social-rating-media-queen-vip-king-crown.svg',
                                    'customer-support-1--customer-headset-help-microphone-phone-support.svg',
                                    'cut--coupon-cut-discount-price-prices-scissors.svg',
                                    'dark-dislay-mode.svg',
                                    'dashboard-3--app-application-dashboard-home-layout-vertical.svg',
                                    'dashboard-circle--app-application-dashboard-home-layout-circle.svg',
                                    'delete-1--remove-add-button-buttons-delete-cross-x-mathematics-multiply-math.svg',
                                    'descending-number-order.svg',
                                    'disable-bell-notification--disable-silent-notification-off-silence-alarm-bell-alert.svg',
                                    'disable-heart.svg',
                                    'division-circle--interface-math-divided-by-sign-mathematics.svg',
                                    'download-box-1--arrow-box-down-download-internet-network-server-upload.svg',
                                    'download-circle--arrow-circle-down-download-internet-network-server-upload.svg',
                                    'download-computer--action-actions-computer-desktop-device-display-download-monitor-screen.svg',
                                    'download-file.svg',
                                    'empty-clipboard--work-plain-clipboard-task-list-company-office.svg',
                                    'equal-sign--interface-math-equal-sign-mathematics.svg',
                                    'expand--big-bigger-design-expand-larger-resize-size-square.svg',
                                    'expand-horizontal-1--expand-resize-bigger-horizontal-smaller-size-arrow-arrows-big.svg',
                                    'expand-window-2--expand-small-bigger-retract-smaller-big.svg',
                                    'face-scan-1--identification-angle-secure-human-id-person-face-security-brackets.svg',
                                    'factorial--interface-math-number-factorial-sign-mathematics.svg',
                                    'fahrenheit--degrees-temperature-fahrenheit-degree-weather.svg',
                                    'fastforward-clock--time-clock-reset-stopwatch-circle-measure-loading.svg',
                                    'file-add-alternate--file-common-add.svg',
                                    'file-delete-alternate--file-common-delete-cross.svg',
                                    'file-remove-alternate--file-common-remove-minus-subtract.svg',
                                    'filter-2--funnel-filter-angle-oil.svg',
                                ];
                            @endphp

                            @foreach($icons as $icon)
                                <div class="icon">
                                    <img src="{{ asset('assets/Icon/icons/' . $icon) }}" alt="{{ pathinfo($icon, PATHINFO_FILENAME) }}">
                                    <p>{{ pathinfo($icon, PATHINFO_FILENAME) }}</p>
                                </div>
                            @endforeach


                    </div>
                </div>
            </div>
        </div> --}}

@endsection



