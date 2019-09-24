<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Webstránka</li>
                <li>
                    <a href="{{ route('dashboard.index') }}" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span>Úvod</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-account-multiple"></i>
                        <span>Klienti<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('clients.index') }}">
                                Zoznam klientov
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-worker"></i>
                        <span>Pracovné pozície<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('jobs.index') }}">
                                Zoznam pracovných pozícií
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>

        <div class="clearfix"></div>
    </div>
</div>