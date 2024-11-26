<style>
    /* Modal */
    .modal {
        display: block;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        display: inline-grid;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 252px;
        background-color: #fff;
        padding: 20px;
        text-align: center;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
    }

    .modal-btn {
        background: #000000;
        color: #ffffff;
        height: 40px;
        width: 100%;
        align-content: center;
        padding-top: 16px;
        padding-bottom: 32px;
        text-decoration: none;
        font-size: 16px;
        font-weight: 400;
        line-height: 20.8px;
    }
    .modal-content .modal-title > span {
        font-weight: bolder;
        font-size: 28px;
        font-weight: 600;
        line-height: 36.4px;
        height: 108px;
    }
</style>

<!-- Modal -->
@if (!auth()->check())
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-title">
                <span>Please register to experience & start creating your own PERSONA!</span>
            </div>
            <a class="modal-btn" href="/register">Login or Register now</a>
        </div>
    </div>
@endif
<div id="registerModal" class="modal" style="display: none;">
    <div class="modal-content">
        <div class="modal-title">
            <span>Thank you for registering! Let’s start creating your own persona</span>
        </div>
        <a class="modal-btn" href="/register">Login</a>
    </div>
</div>
@if (session('registration_success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('myModal');
            const modalRegister = document.getElementById('registerModal');
            if (modalRegister) {
                modalRegister.style.display = 'block';
            }
            if(modal) {
                modal.style.display = 'none';
            }
        });
    </script>
@endif
