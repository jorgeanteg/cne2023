<style>
    * {
        font-family: "Roboto", sans-serif;
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        display: grid;
        place-items: center;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .video {
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .video .overlay {
        position: absolute;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4));
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .video video {
        width: auto;
        display: block;
    }

    @media (min-width: 992px) {
        .video video {
            width: 100%;
        }
    }

    .contenido-video {
        z-index: 1;
    }

    .contenido-video h2 {
        color: #FFFFFF;
        font-size: 60px;
        margin: 0;
        font-weight: 500;
    }

    .contenido-video p {
        color: #FFFFFF;
        font-size: 30px;
        margin-top: 15px;
    }

    .contenido-video a {
        border: 2px solid #FFFFFF;
        display: inline-block;
        padding: 10px 20px;
        color: #FFFFFF !important;
        font-weight: 400;
        font-size: 1.5rem;
        margin: 0;
        border-radius: 50px;
        margin-top: 20px;
        cursor: pointer;
    }

    .contenido-video a:hover {
        background-color: #448aff;
        color: #FFFFFF !important;

    }

    .e {
        color: yellow;
    }

    .cua {
        color: blue;
    }

    .dor {
        color: red;
    }
</style>

<div class="video">
    <div class="overlay">
        <div class="container contenido-video text-center">
            <div>
                <img width="400px" src="<?php echo base_url(); ?>/assets/img/logo2.png" alt="">
            </div>
            <h2>Elecciones Precidenciales y <br> Legislativas Anticipadas 2023</h2>
            <p>"En Democracia, <strong><span class="e">E</span><span class="cua">cua</span><span
                        class="dor">dor</span></strong> juega limpio"</p>
            <a href="<?php echo site_url(); ?>/reportes/general" >Ubica a todos tus candidatos</a>
        </div>
    </div>

    <video autoplay muted loop>
        <source src="<?php echo base_url(); ?>/assets/img/video.mp4" type="video/mp4">
    </video>
</div>