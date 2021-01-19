<?php
    class Servicio
    {
        public function insert_servicio($NrAnalitico)
        {
            $url = "http://transtotalonline.azurewebsites.net/api/cxp/CXP_EntregaRendir/integracion";    
            $data = array(
                "Id" => "0",
                "TpoEntregaRendir" => "AP",   //No tengo este dato
                "NrEntregaRendir"=> "0721012997", //Que es
                "IdOper" => "",
                "IdEmisor" => "07",   // Que es
                "DesEmisor" => "",
                "AREmisor" => 0,                                                   
                "IdCCosto" => "CC02010101",
                "DesCCosto" => "",
                "IdSolicitante" => "47229137", 
                "DesSolicitante" => "",
                "EMailSolicitante" => "dhenriquez@ulog.com.pe",
                "TpEntidad" => 1,
                "NdEntidad" => "20392952455",
                "RsEntidad" => "CONTRANS S.A.C.",
                "AREntidad" =>   0,                                                   
                "BCEntidad" =>   0,
                "FchEmision" => "18/01/2021",
                "FchRendicion" => "01/01/1900", //Este puedo mandarlo asi con 01/01/1900
                "NroAsientoRendicion" => "",
                "IdMoneda" => "USD",
                "TpoCambio" => 3.6140,  //Enviarme el tipo de cambio
                "Importe" => 166.00,
                "TpAnalitico" => "",
                "IdAnalitico" => 0,
                "NrAnalitico" => $NrAnalitico,
                //"NrAnalitico" => "SEC0121-006473", //Nro de Operacion
                "TpReferencia" => "",
                "IdReferencia" => 0,
                "NrReferencia" => "",
                "TpOrigen" => "",
                "IdOrigen" => 0,
                "NrOrigen" => "",
                "Glosa" => "PAGO EN LÍNEA GATE OUT CODIGO DE PAGO 2021010993 // CLIENTE ALICORP BK LIMB01561900", //No tengo glosa podria concatenar de los otros datos?
                "FlagFacturacionTerceros" => 0,
                "IdServicio" => "",
                "DesServicio" => "",
                "FlagDetraccion" => 0,
                "PorcentajeDetraccion" => 0,
                "ImporteDetraccion" => 0,
                "FlagRetencion" => 0,
                "FlagSubAgenciamiento" => 0,
                "IdTipoEntregaRendir" => "005", //No tengo este dato
                "DesTipoEntregaRendir" => "",
                "TipoPago" => "TR",   //No tengo este dato
                "IdBanco" => "CRE",   // Este dato viene del RUC?
                "DesBanco" => "",
                "InterbancariaPEN" => "0000000000000",
                "InterbancariaUSD" => "0000000000000",
                "FchOperacion" => "01/01/1900",   //Esta fecha puede seguir siendo 01/01/1900
                "DiasDiferidos" => 0,           // es obligatorio este dato?
                "Condicion" => 1,               //Para todos es 1?
                "DesCondicion" => "",
                "IdAprobador" => "fmunoz",
                "DesAprobador" => "",
                "Estado" => "A",               //Siempre mando A?
                "DesEstado" => "",
                "Modo" => "N",                  //Siempre es N?                
                "Usuario" => "dhenriquez",      //Este es el solicitante?
                "VoBo_IdActividad" => 0,        //sigo mandando 0?
                "VoBo_DesActividad" => 0,       //sigo mandando 0?
                "IdSustento" => 0,              //sigo mandando 0?
                "VoBo_Modo" => 0,              //sigo mandando 0?     
                "VoBoMsg" => "",            
                "IdERContab" => 0,                  //sigo mandando 0?
                "FchERContab" => "01/01/1900"    //este puede seguir siendo 01/01/1900??
            );
            $payload = json_encode($data);
    
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER,
                    array("Content-type: application/json"));
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
            $json_response = curl_exec($curl);
            $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            if ( $status != 201 ) {
                die($json_response);
            }
            
            curl_close($curl);
            $response = json_decode($json_response, true);
                }
            }
?>