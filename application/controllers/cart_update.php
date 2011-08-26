<?php 

$data = array(
               array(
                       'rowid'   => 'd0c00b4e4b747d8475d1c93ff8067138',
                       'qty'     => 5
                    ),
               array(
                       'rowid'   => '90972f7cfcd380a9fa7821d30a9b2fb2',
                       'qty'     => 5
                    ),
               array(
                       'rowid'   => '46acd2fb2e0d0b4a29c67e7ddf1c8946',
                       'qty'     => 5
                    )
            );

$this->cart->update($data);
echo "update() called";