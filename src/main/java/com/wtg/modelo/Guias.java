package com.wtg.modelo;

import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;


@Entity
public class Guias {
	
	@Id
	@Column
	@GeneratedValue(strategy=GenerationType.AUTO)//FOr Autonumber	
	private int id_guias;
	@Column
	private String nombre_despacho;
	@Column
	private String direccion_despacho;
	@Column
	private String ciudad_despacho;
	@Column
	private String nombre_recibido;
	@Column
	private String direccion_recibido;
	@Column
	private String ciudad_recibido;
	@Column
	private Date fecha;
	@Column
	private Double peso;
	@Column
	private Double valor;
	@Column
	private int consecutivo;
	@Column
	private String detalle;
	@Column
	private Double n1;
	@Column
	private Double n2;
	@Column
	private Double n3;
	@Column
	private Double n4;
	
	public Guias(){}			
			
	public Guias(int id_guias, String nombre_despacho, String direccion_despacho, String ciudad_despacho,
			String nombre_recibido, String direccion_recibido, String ciudad_recibido, Date fecha, Double peso,
			Double valor, int consecutivo, String detalle, Double n1, Double n2, Double n3, Double n4) {
		super();
		this.id_guias = id_guias;
		this.nombre_despacho = nombre_despacho;
		this.direccion_despacho = direccion_despacho;
		this.ciudad_despacho = ciudad_despacho;
		this.nombre_recibido = nombre_recibido;
		this.direccion_recibido = direccion_recibido;
		this.ciudad_recibido = ciudad_recibido;
		this.fecha = fecha;
		this.peso = peso;
		this.valor = valor;
		this.consecutivo = consecutivo;
		this.detalle = detalle;
		this.n1 = n1;
		this.n2 = n2;
		this.n3 = n3;
		this.n4 = n4;
	}//Fin del Cosntructor.


	public int getId_guias() {
		return id_guias;
	}


	public void setId_guias(int id_guias) {
		this.id_guias = id_guias;
	}


	public String getNombre_despacho() {
		return nombre_despacho;
	}


	public void setNombre_despacho(String nombre_despacho) {
		this.nombre_despacho = nombre_despacho;
	}


	public String getDireccion_despacho() {
		return direccion_despacho;
	}


	public void setDireccion_despacho(String direccion_despacho) {
		this.direccion_despacho = direccion_despacho;
	}


	public String getCiudad_despacho() {
		return ciudad_despacho;
	}


	public void setCiudad_despacho(String ciudad_despacho) {
		this.ciudad_despacho = ciudad_despacho;
	}


	public String getNombre_recibido() {
		return nombre_recibido;
	}


	public void setNombre_recibido(String nombre_recibido) {
		this.nombre_recibido = nombre_recibido;
	}


	public String getDireccion_recibido() {
		return direccion_recibido;
	}


	public void setDireccion_recibido(String direccion_recibido) {
		this.direccion_recibido = direccion_recibido;
	}


	public String getCiudad_recibido() {
		return ciudad_recibido;
	}


	public void setCiudad_recibido(String ciudad_recibido) {
		this.ciudad_recibido = ciudad_recibido;
	}


	public Date getFecha() {
		return fecha;
	}


	public void setFecha(Date fecha) {
		this.fecha = fecha;
	}


	public Double getPeso() {
		return peso;
	}


	public void setPeso(Double peso) {
		this.peso = peso;
	}


	public Double getValor() {
		return valor;
	}


	public void setValor(Double valor) {
		this.valor = valor;
	}


	public int getConsecutivo() {
		return consecutivo;
	}


	public void setConsecutivo(int consecutivo) {
		this.consecutivo = consecutivo;
	}


	public String getDetalle() {
		return detalle;
	}


	public void setDetalle(String detalle) {
		this.detalle = detalle;
	}


	public Double getN1() {
		return n1;
	}


	public void setN1(Double n1) {
		this.n1 = n1;
	}


	public Double getN2() {
		return n2;
	}


	public void setN2(Double n2) {
		this.n2 = n2;
	}


	public Double getN3() {
		return n3;
	}


	public void setN3(Double n3) {
		this.n3 = n3;
	}


	public Double getN4() {
		return n4;
	}


	public void setN4(Double n4) {
		this.n4 = n4;
	}

	
	
}//Final Clase Guias

