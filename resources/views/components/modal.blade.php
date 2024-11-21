<style>
    /* Modal */
    .modal {
        display: block;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        display: flex;
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        height: 252px;
        width: 624px;
        border-radius: 10px;
        justify-content: center;
        flex-flow: column;
        text-align: center;
        align-items: center;
        row-gap: 20px;
    }

    .modal-btn {
        background: #000000;
        color: #ffffff;
        height: 40px;
        width: 212px;
        align-content: center;
    }
    .modal-content .modal-title > span {
        font-weight: bolder;
        font-size: 28px;
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
