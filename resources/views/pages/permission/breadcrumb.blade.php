<div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="{{ route('permissions.index') }}">Permissions</a></div>
    @if (Request::is('*create'))
    <div class="breadcrumb-item">New permission</div>
    @elseif (Request::is('*edit'))
    <div class="breadcrumb-item">Edit permission</div>
    @else
    <div class="breadcrumb-item d-none"></div>
    @endif
</div>