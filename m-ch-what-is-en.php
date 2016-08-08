<style>
    .video_clip embed {
        width: 100%;
        height: 200px;
    }

    @media all and (min-width: 380px) {
        .video_clip embed {
            height: 275px;
        }
    }
    @media all and (min-width: 600px) {
        .video_clip embed {
            height: 300px;
        }
    }
    @media all and (min-width: 800px) {
        .video_clip embed {
            height: 450px;
        }
    }
    @media all and (min-width: 1024px) {
        .video_clip embed {
            width: 960px;
            height: 550px;
        }
    }
</style>

<div id='content'>
    <div id='con_03'>
        <br><br>
        <center>

            <object class="video_clip">
                <param name="Filename" value="img/mv/woo.mp4">
                <param name="Autosize" value="true">
                <param name="AutoStart" value="true">
                <param name="ShowControls" value="true">
                <embed src="<?php echo td() ?>/img/mv/woo.mp4" showcontrols="true" autostart>
                </embed>
            </object>

        </center>

        <br><br>
    </div>
</div>