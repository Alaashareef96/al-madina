require('./bootstrap');

window.Echo.private(`App.Models.Admin.` + window.UserId)
    .notification((notification) => {
        $('#notificationsList').prepend(` <div class="d-flex flex-column font-weight-bold">
                                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">A new order with amount (${notification.data.amount}) from ${notification.data.customer_name}</a>
                                                    <span class="text-muted">${notification.data.created_date}</span>
                                                </div>`);
        let count = Number($('.badge-number').text())
        count++;
        if (count > 99) {
            count = '99+';
        }
        $('.badge-number').prepend(count)
    })

window.Echo.private(`App.Models.User.` + window.UserId)
    .notification((notification) => {
        let count = Number($('.badge-number').text())
        count++;
        if (count > 99) {
            count = '99+';
        }
        $('.badge-number').text(count)
    })
