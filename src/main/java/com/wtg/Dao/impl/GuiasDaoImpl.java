package com.wtg.Dao.impl;

import java.util.List;

import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import com.wtg.Dao.GuiasDao;
import com.wtg.modelo.Guias;

@Repository 
public class GuiasDaoImpl implements GuiasDao {

	@Autowired
	private SessionFactory Session;
	
	
	@Override
	public void add(Guias guia) {
		Session.getCurrentSession().save(guia);
	}

	@Override
	public void edit(Guias guia) {
		Session.getCurrentSession().update(guia);

	}

	@Override
	public void delete(int id_guia) {
		Session.getCurrentSession().delete(getGuias(id_guia));

	}

	@Override
	public Guias getGuias(int id_guia) {
		return (Guias)Session.getCurrentSession().get(Guias.class, id_guia);
	}

	@Override
	public List getAllGuias() {
		return Session.getCurrentSession().createQuery("FROM Guias").list();
	}

}//Fin de GuiasDaoImpl
