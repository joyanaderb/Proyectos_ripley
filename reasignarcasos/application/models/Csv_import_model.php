<?php
class Csv_import_model extends CI_Model
{
	function select2()
	{
        $db6 = $this->load->database('db6', TRUE);
		$db6->order_by('Nticket', 'DESC');
		$resultados = $db6->get('TBL_NUEVA_ASIGNACION');
		if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
	}
    
    function select()
	{
		$db6 = $this->load->database('db6', TRUE);
		$query = $db6->get('TBL_NUEVA_ASIGNACION');
		return $query;
	}
    
    function mostrarcasosamarcar()
	{
		$this->db->order_by('id', 'DESC');
		$resultados = $this->db->get('base_macarena');
		 if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
	}
    
    
  

	function insert($data)
	{ 
        $db6 = $this->load->database('db6', TRUE);
        $db6->truncate('TBL_NUEVA_ASIGNACION');
		$db6->insert_batch('TBL_NUEVA_ASIGNACION', $data);
	}
    
    function insert_historico($data2)
	{ 
        $db6 = $this->load->database('db6', TRUE);
		$db6->insert_batch('historico_reasignaciones', $data2);
	}
    
    	function insertMail($data2)
	{ 
        $db6 = $this->load->database('db6', TRUE);
		$db6->insert_batch('base_macarena_excel', $data2);
	}
    
    
    function MarcarCasos()
        
	{ 
        $db6 = $this->load->database('db6', TRUE);
          $sql= "

---------------INSERTA CASOS EN CASO DEL QUE EL CASO NO ESTA INSERTADO---
    
    
SET XACT_ABORT ON
INSERT INTO [Portal_Asignaciones].[dbo].[TB_AGENTE_ASIGNADOS_BASE]
(
[RandAgente],[GES - Nº Contacto],[GES - Nº Gestión],[GES - Nombre Plan Gestión],[GES - Nombre Campaña Gestión]
,[GES - Fecha Creación],[GES - Desc Motivo 1],[GES - Desc Motivo 2],[GES - Desc Motivo 3],[GES - Desc Sucursal de Recurso]
,[FLD - Fecha Plazo],[FLD - Fecha Ultima Glosa],[ege_data01],[ege_data02],[FilPlan],[FilCam],[FilSucReQ]
,[FilMotivo],[FilSubMotivo],[FilFechaCrea],[FilFechaPlazo],[FilCanalSer],[FilSucRec]
,[FilFechaGlosa],[AG_Conf],[GES - Id Cliente],[GES - Nombre Cliente],[FechaHoursEje]
,[Agente_Trabajar],[GES - Tipo Cliente],[FilTipCliente]
)
select  
a.[RandAgente],a.[GES - Nº Contacto],a.[GES - Nº Gestión]
,a.[GES - Nombre Plan Gestión],a.[GES - Nombre Campaña Gestión]
,a.[GES - Fecha Creación],a.[GES - Desc Motivo 1],a.[GES - Desc Motivo 2]
,a.[GES - Desc Motivo 3],a.[GES - Desc Sucursal de Recurso]
,a.[FLD - Fecha Plazo],a.[FLD - Fecha Ultima Glosa]
,a.[ege_data01],a.[ege_data02],a.[FilPlan],a.[FilCam],a.[FilSucReQ],a.[FilMotivo]
,a.[FilSubMotivo],a.[FilFechaCrea],a.[FilFechaPlazo]
,a.[FilCanalSer],a.[FilSucRec]
,a.[FilFechaGlosa]
------------------------------
,99999
------------------------------
,a.[GES - Id Cliente],a.[GES - Nombre Cliente]
,a.[FechaHoursEje],
--------------------------
'XXX' AS [Agente_Trabajar]
--------------------------
,a.[GES - Tipo Cliente]
,a.[FilTipCliente]

from [Portal_Asignaciones].[dbo].TB_AGENTE_DISTRIBUCION as a

where [GES - Nº Contacto] in (select Nticket from [Portal_Asignaciones].[dbo].[TBL_NUEVA_ASIGNACION] );

  ----------------------------------------------------------------------------------------------
  update p set p.agente_trabajar= a.nuevo_usuario   from portal_asignaciones.dbo.TB_AGENTE_ASIGNADOS_BASE  as p inner join 
  [Portal_Asignaciones].[dbo].[TBL_NUEVA_ASIGNACION] as a   on p.[GES - Nº Contacto]=a.Nticket 
  where p.agente_trabajar <> a.nuevo_usuario;
  ----------------------------------------------------------------------------------------------
  update portal_asignaciones.dbo.TB_AGENTE_DISTRIBUCION  set estado_registro='Historico'  where [GES - Nº Contacto] in (
  select Nticket from   [Portal_Asignaciones].[dbo].[TBL_NUEVA_ASIGNACION]) and estado_registro<>'Historico';
  ----------------------------------------------------------------------------------------------
  
  INSERT INTO [TB_AGENTE_ASIGNADOS_BASE_HISTO]
      ( 
       [RandAgente]
      ,[GES - Nº Contacto]
      ,[GES - Nº Gestión]
      ,[GES - Nombre Plan Gestión]
      ,[GES - Nombre Campaña Gestión]
      ,[GES - Fecha Creación]
      ,[GES - Desc Motivo 1]
      ,[GES - Desc Motivo 2]
      ,[GES - Desc Motivo 3]
      ,[GES - Desc Sucursal de Recurso]
      ,[FLD - Fecha Plazo]
      ,[FLD - Fecha Ultima Glosa]
      ,[ege_data01]
      ,[ege_data02]
      ,[FilPlan]
      ,[FilCam]
      ,[FilSucReQ]
      ,[FilMotivo]
      ,[FilSubMotivo]
      ,[FilFechaCrea]
      ,[FilFechaPlazo]
      ,[FilCanalSer]
      ,[FilSucRec]
      ,[FilFechaGlosa]
      ,[AG_Conf]
      ,[GES - Id Cliente]
      ,[GES - Nombre Cliente]
      ,[FechaHoursEje]
      ,[Agente_Trabajar]
      ,[Fecha_Proceso]
      ,[Estado_Gestion]
      )
   SELECT
       [RandAgente]
      ,[GES - Nº Contacto]
      ,[GES - Nº Gestión]
      ,[GES - Nombre Plan Gestión]
      ,[GES - Nombre Campaña Gestión]
      ,[GES - Fecha Creación]
      ,[GES - Desc Motivo 1]
      ,[GES - Desc Motivo 2]
      ,[GES - Desc Motivo 3]
      ,[GES - Desc Sucursal de Recurso]
      ,[FLD - Fecha Plazo]
      ,[FLD - Fecha Ultima Glosa]
      ,[ege_data01]
      ,[ege_data02]
      ,[FilPlan]
      ,[FilCam]
      ,[FilSucReQ]
      ,[FilMotivo]
      ,[FilSubMotivo]
      ,[FilFechaCrea]
      ,[FilFechaPlazo]
      ,[FilCanalSer]
      ,[FilSucRec]
      ,[FilFechaGlosa]
      ,[AG_Conf]
      ,[GES - Id Cliente]
      ,[GES - Nombre Cliente]
      ,[FechaHoursEje]
      ,[Agente_Trabajar]
      ,[Fecha_Proceso]
      ,[Estado_Gestion]
	  --,EstadoAsignado 
     FROM dbo.TB_AGENTE_ASIGNADOS_BASE 
	 where  [GES - Nº Contacto] in(select Nticket from   [Portal_Asignaciones].[dbo].[TBL_NUEVA_ASIGNACION])
  
  
----------------------------------------------------------------------------------------------
  update p set p.agente_trabajar= a.nuevo_usuario   from portal_asignaciones.dbo.TB_AGENTE_ASIGNADOS_BASE_HISTO  as p inner join 
  [Portal_Asignaciones].[dbo].[TBL_NUEVA_ASIGNACION] as a   on p.[GES - Nº Contacto]=a.Nticket;
  ----where p.agente_trabajar<> a.nuevo_usuario ;

";
        
    $query = $db6->query($sql);
        
   
	}
    
     function MarcarCasos2()
	{ 
           
        $sql2='
        SET XACT_ABORT ON
        update registros as a inner join form_ripley.vt_actualizar_macarena as b on a.id=b.id_form
set
a.ga_accion=b.ga_accion_b,
a.tv=b.tv_b
where b.ga_accion_b like "%Manual%"'; 
    $query = $this->db->query($sql2);
        
   
	}
    
   public function getCasosamarcar()
    {
             $this->db->select("*"); // OTHER CONDITIONS IF ANY
$this->db->from('base_macarena'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
}
