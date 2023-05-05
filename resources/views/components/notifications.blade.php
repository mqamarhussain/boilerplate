<div
    x-data="{
        messages: [],
        remove(message) {
            this.messages.splice(this.messages.indexOf(message), 1)
        },
    }"
    @notify.window="let message = $event.detail; messages.push(message); setTimeout(() => { remove(message) }, 2500)"
    
>
    <template x-for="(message, messageIndex) in messages" :key="messageIndex" hidden>
          <div :class="'notification-'+message.type" class="dm-notification-box">
            <div class="dm-notification-box__content media">
                <div class="dm-notification-box__icon">
                    <i x-show="message.type == 'success'" class="uil uil-check-circle"></i>
                    <i x-show="message.type == 'info'" class="uil uil-info-circle"></i>
                    <i x-show="message.type == 'danger'" class="uil uil-times-circle"></i>
                    <i x-show="message.type == 'warning'" class="uil uil-exclamation-circle"></i>
                </div>
                <div class="dm-notification-box__text media-body">
                    <h6 x-text="message.title"></h6>
                    <p x-text="message.message"></p>
                </div>
                <a href="#" @click="remove(message)"  class="dm-notification-box__close" data-toast="close">
                    <i class="uil uil-times"></i>
                </a>
            </div>
        </div>
    </template>
</div>