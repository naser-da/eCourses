<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/" class="simple-text logo-mini">{{ __('eC') }}</a>
            <a href="/" class="simple-text logo-normal">{{ __('eCourses') }}</a>
        </div>
        <ul class="nav">
            <li @if (Request::path() == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-components"></i>
                    <p>{{ __('Courses') }}</p>
                </a>
            </li>
            <li @if (Request::path() == 'profile') class="active " @endif>
                <a href="{{ route('profile.edit')  }}">
                    <i class="tim-icons icon-pencil"></i>
                    <p>{{ __('Edit Profile') }}</p>
                </a>
            </li>

            <li @if (Request::path() == "user/".auth()->user()->username) class="active " @endif>
                <a href="{{ route('profile.show', ['username'=>auth()->user()->username])  }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('View Profile') }}</p>
                </a>
            </li>

            <li @if (Request::path() == "users") class="active " @endif>
                <a href="{{ route('profile.show.all')  }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('Users') }}</p>
                </a>
            </li>
            
            {{-- <li @if (Request::path() == 'users') class="active " @endif>
                <a href="{{ route('user.index')  }}">
                    <i class="tim-icons icon-bullet-list-67"></i>
                    <p>{{ __('User Management') }}</p>
                </a>
            </li>
            <li @if (Request::path() == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if (Request::path() == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li @if (Request::path() == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if (Request::path() == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if (Request::path() == 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li @if (Request::path() == 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <li class=" {{ Request::path() == 'upgrade' ? 'active' : '' }} bg-info">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
