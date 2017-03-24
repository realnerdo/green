@if (session()->has('flash_message'))
    <div class="notification">
        <span class="message">{{ session()->get('flash_message') }}</span>
        <button class="close-notification">&times;</button>
    </div>
    <!-- /.notification -->
@endif