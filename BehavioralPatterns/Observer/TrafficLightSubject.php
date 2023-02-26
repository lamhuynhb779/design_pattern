<?php
/** Class đối tượng đèn giao đông */
class TrafficLightSubject {

    /**
     * Trạng thái của đèn
     * @var string $state
     */
    public string $state = ''; // red green yellow

    /**
     * Những người đang đứng quan sát đèn giao thông
     * @var array $observerList
     */
    public array $observerList = [];

    /**
     * Những người này sẽ đăng ký quan sát đèn giao thông
     * @param PersonObserver $observer
     */
    public function addObserver(PersonObserver $observer) {
        $this->observerList[] = $observer;
    }

    /**
     * Thông báo (hiển thị) sự thay đổi của đèn đến từng người quan sát
     */
    public function notify() {
        foreach($this->observerList as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Đèn sẽ xữ lý đổi sang màu
     */
    public function someBusinessLogic() {

        $colors = ['red', 'green', 'blue'];

        $currentColor = $colors[rand(0, 2)];

        // Trạng thái đã thay đổi và báo lại cho
        // các người quan sát (observers) biết
        $this->state = $currentColor;
        $this->notify();
    }
}