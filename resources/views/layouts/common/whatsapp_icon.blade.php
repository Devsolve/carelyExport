<div class="whatsapp-icon">
    <a href="https://api.whatsapp.com/send?phone=+917001821069" target="_blank">
        <img src="{{ asset('assets/img/WhatsApp.png') }}" width="200px" height="200px" alt="WhatsApp Icon">
    </a>
</div>
<a href="javascript:void(0);" class="scroll-to-top" onclick="scrollToTop()"><i class="fas fa-arrow-up"></i></a>

<script>
    window.addEventListener('scroll', function() {
        var scrollToTop = document.querySelector('.scroll-to-top');
        if (window.pageYOffset > 100) {
            scrollToTop.classList.add('show');
        } else {
            scrollToTop.classList.remove('show');
        }
    });

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
    {{-- scroll css --}} .scroll-to-top {
        display: none;
        position: fixed;
        bottom: 100px;
        right: 27px;
        width: 40px;
        height: 40px;
        background-color: #333;
        color: #fff;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        z-index: 9999;
        cursor: pointer;
        justify-content: center;
        align-items: center;
    }

    .scroll-to-top.show {
        display: flex;
    }

    .scroll-to-top.active {
        display: block;
    }

    /**/
    .whatsapp-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
    }

    .whatsapp-icon img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
</style>
