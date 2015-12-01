package com.wtg.service;

import java.util.List;

import com.wtg.modelo.Guias;

public interface GuiasService {
	public void add(Guias guia);
	public void edit(Guias guia);
	public void delete(int id_guia);
	public Guias getGuias(int id_guia);
	public List getAllGuias();

}//fin de GuiasService
