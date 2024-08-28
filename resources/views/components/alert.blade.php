<style>
    @keyframes borderSlide {
        from {
            border-bottom: 2px solid blue;
            width: 0%;
        }

        to {
            border-bottom: 2px solid transparent;
            width: 100%;
        }
    }

    .alert {
        position: relative;
    }

    .alert-heading::after {
        content: '';
        display: block;
        position: absolute;
        bottom: 0;
        left: 0;
        height: 2px;
        width: 0;
        background-color: blue;
        animation: borderSlide 4s ease reverse;
    }
</style>


<div class="alert alert-primary alert-dismissible" role="alert">
    <h6 class="alert-heading d-flex align-items-center" style="margin-bottom: 0px;">
        <span class="alert-icon rounded"><i class="ri-checkbox-circle-line ri-22px"></i></span>
        {{$alertmsg}}
    </h6>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="top: 6px;"></button>
</div>