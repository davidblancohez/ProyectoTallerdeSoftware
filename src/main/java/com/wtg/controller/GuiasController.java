package com.wtg.controller;

import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;

import com.wtg.modelo.Guias;
import com.wtg.service.GuiasService;

@Controller 
public class GuiasController {

	@Autowired
	private GuiasService guiasService;
	
	@RequestMapping("/index")
	public String setupFrom(Map<String, Object> map){
		Guias guias = new Guias();
		map.put("guias", guias);
		map.put("guiasList", guiasService.getAllGuias());
		return "guias";
		
	}//Fin de setupFrom.
	
	@RequestMapping(value="/guias.do", method=RequestMethod.POST)
	public String doActions(@ModelAttribute Guias guias, BindingResult result, @RequestParam String action, Map<String, Object> map){
		Guias guiasResult = new Guias();
		
		switch(action.toLowerCase()){
		case "add":
			guiasService.add(guias);
			guiasResult = guias;
			break;
		case "edit":
			guiasService.edit(guias);
			guiasResult = guias;
			break;			
		case "delete":
			guiasService.delete(guias.getId_guias());
			guiasResult = new Guias();
			break;
		case "search":
			Guias searchGuias = guiasService.getGuias(guias.getId_guias());
			guiasResult = searchGuias!=null ? searchGuias : new Guias();
			break;
			
		}//Fin del switch.
		
		map.put("guias",guiasResult);
		map.put("guiasList", guiasService.getAllGuias());
		
		return "guias";
	}
	
	
	
}//Fin de GuiasContoller.
