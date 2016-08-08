<style>
    .video_clip {
        width: 100%;
        height: 200px;
    }

    @media all and (min-width: 380px) {
        .video_clip {
            height: 275px;
        }
    }
    @media all and (min-width: 600px) {
        .video_clip {
            height: 300px;
        }
    }
    @media all and (min-width: 800px) {
        .video_clip {
            height: 450px;
        }
    }
    @media all and (min-width: 1024px) {
        .video_clip {
            width: 960px;
            height: 550px;
        }
    }
</style>

<div id='content'>
    <div id='con_03' style="text-align: center;">
        <br><br>
        <video controls="" autoplay="" name="media" class="video_clip">
            <source src="<?php echo td() ?>/img/mv/woo.mp4" type="video/mp4">
        </video>
        <br><br>
    </div>
</div>