$(document).ready(function () {

    function fetchWatchedVideos() {
        $.ajax({
            type: "GET",
            url: "track_video_view.php", 
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    const videosList = $("#watched-videos-list");
                    videosList.empty(); 

                    response.watched_videos.forEach((videoID) => {
                        const listItem = $("<li>").text("Video ID: " + videoID);
                        videosList.append(listItem);
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error(error); 
            }
        });
    }

    function fetchCompletedModules() {
        $.ajax({
            type: "GET",
            url: "store_module_status.php", 
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    const modulesList = $("#completed-modules-list");
                    modulesList.empty(); 

                    response.completed_modules.forEach((moduleNumber) => {
                        const listItem = $("<li>").text("Module " + moduleNumber);
                        modulesList.append(listItem);
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error(error); 
            }
        });
    }

    fetchWatchedVideos();
    fetchCompletedModules();
});
