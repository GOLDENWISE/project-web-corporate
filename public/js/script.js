$(".delete-button").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");
    Swal.fire({
        title: "Are you sure?",
        text: "If you click this, this company will deleted!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
    });
});
