using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Projectweb
{
    #region Items
    public class Items
    {
        #region Member Variables
        protected int _ID;
        protected unknown _Prix;
        protected string _Nom;
        protected string _AdressePhoto;
        protected string _Categorie;
        #endregion
        #region Constructors
        public Items() { }
        public Items(unknown Prix, string Nom, string AdressePhoto, string Categorie)
        {
            this._Prix=Prix;
            this._Nom=Nom;
            this._AdressePhoto=AdressePhoto;
            this._Categorie=Categorie;
        }
        #endregion
        #region Public Properties
        public virtual int ID
        {
            get {return _ID;}
            set {_ID=value;}
        }
        public virtual unknown Prix
        {
            get {return _Prix;}
            set {_Prix=value;}
        }
        public virtual string Nom
        {
            get {return _Nom;}
            set {_Nom=value;}
        }
        public virtual string AdressePhoto
        {
            get {return _AdressePhoto;}
            set {_AdressePhoto=value;}
        }
        public virtual string Categorie
        {
            get {return _Categorie;}
            set {_Categorie=value;}
        }
        #endregion
    }
    #endregion
}