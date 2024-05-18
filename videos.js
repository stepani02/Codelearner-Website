<script>
    // When the document is ready
    $(document).ready(function () {
        $(".item").click(function () {
            let isLoggedIn = false; 

            if (isLoggedIn) {
                let youtube_id = $(this).find("img").attr("data-id");
                $(this).find(".youtube_icon").addClass("active");
                $(this).siblings().find(".youtube_icon").removeClass("active");
                let newUrl = `https://www.youtube.com/embed/${youtube_id}`;
                $("#video_id").attr("src", newUrl);
            } else {
                $("#loginModal").css("display", "block");
            }
        });

        $(".close").click(function () {
            $("#loginModal").css("display", "none");
        });

        window.onclick = function (event) {
            if (event.target == document.getElementById("loginModal")) {
                $("#loginModal").css("display", "none");
            }
        };
    });
</script>
