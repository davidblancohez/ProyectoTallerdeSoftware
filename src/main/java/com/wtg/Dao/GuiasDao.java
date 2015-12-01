package com.wtg.Dao;

import java.util.List;

import com.wtg.modelo.Guias;

public interface GuiasDao {
	public void add(Guias guia);
	public void edit(Guias guia);
	public void delete(int id_guia);
	public Guias getGuias(int id_guia);
	public List getAllGuias();

}//Fin de GuiasDao
