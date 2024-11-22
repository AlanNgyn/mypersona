<style>
    /* Modal */
    .modal {
        display: block;
        position: fixed;
        z-index: 1;
        left: 0;
        bottom: 0;
        height: 100%;
        max-width: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        display: flex;
        background-color: #fefefe;
        height: 252px;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
        justify-content: center;
        flex-flow: column;
        text-align: center;
        align-items: center;
        row-gap: 20px;
        margin-top: 100%;
    }

    .modal-btn {
        background: #000000;
        color: #ffffff;
        height: 40px;
        width: 90%;
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
<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="modal-title">
            <span>Please register to experience</span>
            <br/>
            <span>& start creating your own PERSONA!</span>
        </div>
        <a class="modal-btn" href="/register">Login or Register now</a>
    </div>
</div>
