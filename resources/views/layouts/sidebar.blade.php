<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="index.html" class="header-logo">
            <img src="assets/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
        </a>
        <div class="iq-menu-bt-sidebar">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <div class="new-create select-dropdown input-prepend input-append">
            <div class="btn-group">
                <div data-toggle="dropdown">
                    <div class="search-query selet-caption"><i class="las la-plus pr-2"></i>Create New</div><span class="search-replace"></span>
                    <span class="caret"><!--icon--></span>
                </div>
                <ul class="dropdown-menu">
                    <li>
                        <div class="item"><i class="ri-folder-add-line pr-3"></i>New Folder</div>
                    </li>
                    <li>
                        <div class="item"><i class="ri-file-upload-line pr-3"></i>Upload Files</div>
                    </li>
                    <li>
                        <div class="item"><i class="ri-folder-upload-line pr-3"></i>Upload Folders</div>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="active">
                    <a href="backend/index.html" class="">
                        <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                    </a>
                    <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>
                <li class=" ">
                    <a href="#mydrive" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="las la-hdd"></i><span>My Drive</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="mydrive" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" ">
                            <a href="backend/page-alexa.html">
                                <i class="lab la-blogger-b"></i><span>Alexa Workshop</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="backend/page-android.html">
                                <i class="las la-share-alt"></i><span>Android</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="backend/page-brightspot.html">
                                <i class="las la-icons"></i><span>Brightspot</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="backend/page-ionic.html">
                                <i class="las la-icons"></i><span>Ionic Chat App</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="backend/page-files.html" class="">
                        <i class="lar la-file-alt iq-arrow-left"></i><span>Files</span>
                    </a>
                    <ul id="page-files" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>
                <li class=" ">
                    <a href="backend/page-folders.html" class="">
                        <i class="las la-stopwatch iq-arrow-left"></i><span>Recent</span>
                    </a>
                    <ul id="page-folders" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>
                <li class=" ">
                    <a href="backend/page-favourite.html" class="">
                        <i class="lar la-star"></i><span>Favourite</span>
                    </a>
                    <ul id="page-fevourite" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>
                <li class=" ">
                    <a href="backend/page-delete.html" class="">
                        <i class="las la-trash-alt iq-arrow-left"></i><span>Trash</span>
                    </a>
                    <ul id="page-delete" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>
                <li class=" ">
                    <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="lab la-wpforms iq-arrow-left"></i><span>other page</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" ">
                            <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-user-cog"></i><span>User Details</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class=" ">
                                    <a href="app/user-profile.html">
                                        <i class="las la-id-card"></i><span>User Profile</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="app/user-add.html">
                                        <i class="las la-user-plus"></i><span>User Add</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="app/user-list.html">
                                        <i class="las la-list-alt"></i><span>User List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="lab la-uikit iq-arrow-left"></i><span>UI Elements</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class=" ">
                                    <a href="backend/ui-avatars.html">
                                        <i class="las la-user-tie"></i><span>Avatars</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-alerts.html">
                                        <i class="las la-exclamation-triangle"></i><span>Alerts</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-badges.html">
                                        <i class="las la-id-badge"></i><span>Badges</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-breadcrumb.html">
                                        <i class="las la-ellipsis-h"></i><span>Breadcrumb</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-buttons.html">
                                        <i class="las la-ticket-alt"></i><span>Buttons</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-buttons-group.html">
                                        <i class="las la-object-group"></i><span>Buttons Group</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-boxshadow.html">
                                        <i class="las la-boxes"></i><span>Box Shadow</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-colors.html">
                                        <i class="las la-brush"></i><span>Colors</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-cards.html">
                                        <i class="las la-credit-card"></i><span>Cards</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-carousel.html">
                                        <i class="las la-sliders-h"></i><span>Carousel</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-grid.html">
                                        <i class="las la-th-large"></i><span>Grid</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-helper-classes.html">
                                        <i class="las la-hands-helping"></i><span>Helper classes</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-images.html">
                                        <i class="las la-image"></i><span>Images</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-list-group.html">
                                        <i class="las la-list-alt"></i><span>list Group</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-media-object.html">
                                        <i class="las la-photo-video"></i><span>Media</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-modal.html">
                                        <i class="las la-columns"></i><span>Modal</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-notifications.html">
                                        <i class="las la-bell"></i><span>Notifications</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-pagination.html">
                                        <i class="las la-ellipsis-h"></i><span>Pagination</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-popovers.html">
                                        <i class="las la-spinner"></i><span>Popovers</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-progressbars.html">
                                        <i class="las la-heading"></i><span>Progressbars</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-typography.html">
                                        <i class="las la-tablet"></i><span>Typography</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-tabs.html">
                                        <i class="las la-tablet"></i><span>Tabs</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-tooltips.html">
                                        <i class="las la-magnet"></i><span>Tooltips</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/ui-embed-video.html">
                                        <i class="las la-play-circle"></i><span>Video</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-torah iq-arrow-left"></i><span>Authentication</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class=" ">
                                    <a href="backend/auth-sign-in.html">
                                        <i class="las la-sign-in-alt"></i><span>Login</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/auth-sign-up.html">
                                        <i class="las la-registered"></i><span>Register</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/auth-recoverpw.html">
                                        <i class="las la-unlock-alt"></i><span>Recover Password</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/auth-confirm-mail.html">
                                        <i class="las la-envelope-square"></i><span>Confirm Mail</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/auth-lock-screen.html">
                                        <i class="las la-lock"></i><span>Lock Screen</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-coins"></i><span>Pricing</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class=" ">
                                    <a href="backend/pricing.html">
                                        <i class="las la-weight"></i><span>Pricing 1</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/pricing-2.html">
                                        <i class="las la-dna"></i><span>Pricing 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-exclamation-triangle"></i><span>Error</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class=" ">
                                    <a href="backend/pages-error.html">
                                        <i class="las la-bomb"></i><span>Error 404</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="backend/pages-error-500.html">
                                        <i class="las la-exclamation-circle"></i><span>Error 500</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="backend/pages-blank-page.html">
                                <i class="las la-pager"></i><span>Blank Page</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="backend/pages-maintenance.html">
                                <i class="las la-cubes"></i><span>Maintenance</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="sidebar-bottom">
            <h4 class="mb-3"><i class="las la-cloud mr-2"></i>Storage</h4>
            <p>17.1 / 20 GB Used</p>
            <div class="iq-progress-bar mb-3">
                <span class="bg-primary iq-progress progress-1" data-percent="67">
                </span>
            </div>
            <p>75% Full - 3.9 GB Free</p>
            <a href="#" class="btn btn-outline-primary view-more mt-4">Buy Storage</a>
        </div>
        <div class="p-3"></div>
    </div>
</div>