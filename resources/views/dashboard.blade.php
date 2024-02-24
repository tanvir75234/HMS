<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button><i class="fas fa-sign-out-alt"></i> Logout</button>
</form>
