package com.wtg.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.wtg.Dao.GuiasDao;
import com.wtg.modelo.Guias;
import com.wtg.service.GuiasService;

@Service
public class GuiasServiceImpl implements GuiasService {
	
	@Autowired 
	private GuiasDao guiasdao;

	@Transactional 
	public void add(Guias guia) {
		guiasdao.add(guia);

	}

	@Transactional
	public void edit(Guias guia) {
		guiasdao.edit(guia);

	}

	@Transactional
	public void delete(int id_guia) {
		guiasdao.delete(id_guia);

	}

	@Transactional
	public Guias getGuias(int id_guia) {
		return guiasdao.getGuias(id_guia);
	}

	@Transactional
	public List getAllGuias() {
		return guiasdao.getAllGuias();
	}

}
