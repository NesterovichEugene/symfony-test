import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['qty'];

    increaseQty() {
        this.qtyTarget.value = parseInt(this.qtyTarget.value) + 1;
    }

    decreaseQty() {
        var qtyValue = parseInt(this.qtyTarget.value);
        if (qtyValue > 1) {
            this.qtyTarget.value = parseInt(this.qtyTarget.value) - 1;
        }
    }
}
