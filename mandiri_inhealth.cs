using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Mandiri_inhealth
{
    #region Skill
    public class Skill
    {
        #region Member Variables
        protected int _id;
        protected string _skill;
        #endregion
        #region Constructors
        public Skill() { }
        public Skill(int id, string skill)
        {
            this._id=id;
            this._skill=skill;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Skill
        {
            get {return _skill;}
            set {_skill=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Mandiri_inhealth
{
    #region Skill_level
    public class Skill_level
    {
        #region Member Variables
        protected int _id;
        protected string _skill_level;
        #endregion
        #region Constructors
        public Skill_level() { }
        public Skill_level(int id, string skill_level)
        {
            this._id=id;
            this._skill_level=skill_level;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Skill_level
        {
            get {return _skill_level;}
            set {_skill_level=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Mandiri_inhealth
{
    #region User
    public class User
    {
        #region Member Variables
        protected int _id;
        protected string _username;
        protected string _password;
        #endregion
        #region Constructors
        public User() { }
        public User(string username, string password)
        {
            this._username=username;
            this._password=password;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Mandiri_inhealth
{
    #region User_profile
    public class User_profile
    {
        #region Member Variables
        protected int _id;
        protected string _username;
        protected string _nama;
        protected string _alamat;
        protected unknown _tanggal_lahir;
        protected string _email;
        #endregion
        #region Constructors
        public User_profile() { }
        public User_profile(string username, string nama, string alamat, unknown tanggal_lahir, string email)
        {
            this._username=username;
            this._nama=nama;
            this._alamat=alamat;
            this._tanggal_lahir=tanggal_lahir;
            this._email=email;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Nama
        {
            get {return _nama;}
            set {_nama=value;}
        }
        public virtual string Alamat
        {
            get {return _alamat;}
            set {_alamat=value;}
        }
        public virtual unknown Tanggal_lahir
        {
            get {return _tanggal_lahir;}
            set {_tanggal_lahir=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Mandiri_inhealth
{
    #region User_skill
    public class User_skill
    {
        #region Member Variables
        protected int _id;
        protected string _username;
        protected int _skill_id;
        protected int _skill_level_id;
        #endregion
        #region Constructors
        public User_skill() { }
        public User_skill(int id, string username, int skill_id, int skill_level_id)
        {
            this._id=id;
            this._username=username;
            this._skill_id=skill_id;
            this._skill_level_id=skill_level_id;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual int Skill_id
        {
            get {return _skill_id;}
            set {_skill_id=value;}
        }
        public virtual int Skill_level_id
        {
            get {return _skill_level_id;}
            set {_skill_level_id=value;}
        }
        #endregion
    }
    #endregion
}