<?php
class datetimeBox extends CWidget {
    public function run() {
        $dateVal = "Ngày ".date('d/m/Y'). ", Giờ".date('H:i:s A');
        $this->render('datetimebox', array(
            'dateVal' => $dateVal
        ));
    }
} 
