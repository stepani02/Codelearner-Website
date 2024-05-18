$(document).ready(function () {
    
    function updateThumbnails() {
        
        $.ajax({
            type: "GET",
            url: "track_video_view.php",
            dataType: "json",
            success: function (response) {
                console.log("AJAX request successful. Response:", response);
                if (response.status === "success") {
                    const watchedVideos = response.watched_videos;
                    $(".item").each(function () {
                        let youtube_id = $(this).find("img").attr("data-id");
                        let thumbnail = $(this);

                        
                        if (watchedVideos.includes(youtube_id)) {
                            thumbnail.find(".youtube_icon").addClass("active");
                        } else {
                            thumbnail.find(".youtube_icon").removeClass("active");
                        }

                        
                        thumbnail.click(function () {
                            
                            let youtube_url = "https://www.youtube.com/embed/" + youtube_id;
                            $("#video_id").attr("src", youtube_url);

                            
                            if (!watchedVideos.includes(youtube_id)) {
                                $.ajax({
                                    type: "POST",
                                    url: "track_video_view.php",
                                    data: { video_id: youtube_id },
                                    dataType: "json",
                                    success: function (response) {
                                        console.log("AJAX request successful. Response:", response);
                                        if (response.status === "success" || response.status === "already_watched") {
                                            console.log("Video marked as watched in the database.");
                                            watchedVideos.push(youtube_id);
                                            thumbnail.find(".youtube_icon").addClass("active");

                                        } else {

                                        }
                                    },
                                    error: function (xhr, status, error) {
                                        console.error("AJAX request error:", error);
                                    }
                                });
                            }
                        });
                    });
                } else {
                }
            },
            error: function (xhr, status, error) {
                console.error("AJAX request error:", error);
            }
        });
    }
    updateThumbnails();
});
