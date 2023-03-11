import './bootstrap';
import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'
import mask from '@alpinejs/mask'

import ToastComponent from '../../vendor/usernotnull/tall-toasts/resources/js/tall-toasts'

Alpine.data('ToastComponent', ToastComponent)

Alpine.plugin(mask)
Alpine.plugin(collapse)

window.Alpine = Alpine

Alpine.start()
