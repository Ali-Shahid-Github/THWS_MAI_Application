namespace Bakery_Management_System
{
    partial class Home_Form
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Home_Form));
            this.bunifuGradientPanel1 = new ns1.BunifuGradientPanel();
            this.Bakery_Name_label = new ns1.BunifuCustomLabel();
            this.Sigup_button = new ns1.BunifuFlatButton();
            this.login_button = new ns1.BunifuFlatButton();
            this.bunifuCustomLabel3 = new ns1.BunifuCustomLabel();
            this.Username_login_textbox = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel2 = new ns1.BunifuCustomLabel();
            this.Password_login_textbox = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuGradientPanel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // bunifuGradientPanel1
            // 
            resources.ApplyResources(this.bunifuGradientPanel1, "bunifuGradientPanel1");
            this.bunifuGradientPanel1.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.bunifuGradientPanel1.Controls.Add(this.Bakery_Name_label);
            this.bunifuGradientPanel1.GradientBottomLeft = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.bunifuGradientPanel1.GradientBottomRight = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(192)))), ((int)(((byte)(0)))));
            this.bunifuGradientPanel1.GradientTopLeft = System.Drawing.Color.Honeydew;
            this.bunifuGradientPanel1.GradientTopRight = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.bunifuGradientPanel1.Name = "bunifuGradientPanel1";
            this.bunifuGradientPanel1.Quality = 50;
            // 
            // Bakery_Name_label
            // 
            resources.ApplyResources(this.Bakery_Name_label, "Bakery_Name_label");
            this.Bakery_Name_label.BackColor = System.Drawing.Color.Transparent;
            this.Bakery_Name_label.Name = "Bakery_Name_label";
            // 
            // Sigup_button
            // 
            this.Sigup_button.Activecolor = System.Drawing.Color.Bisque;
            this.Sigup_button.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            resources.ApplyResources(this.Sigup_button, "Sigup_button");
            this.Sigup_button.BorderRadius = 2;
            this.Sigup_button.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.Sigup_button.ButtonText = "Signup";
            this.Sigup_button.Cursor = System.Windows.Forms.Cursors.Hand;
            this.Sigup_button.DisabledColor = System.Drawing.Color.Gray;
            this.Sigup_button.Iconcolor = System.Drawing.Color.Transparent;
            this.Sigup_button.Iconimage = ((System.Drawing.Image)(resources.GetObject("Sigup_button.Iconimage")));
            this.Sigup_button.Iconimage_right = null;
            this.Sigup_button.Iconimage_right_Selected = null;
            this.Sigup_button.Iconimage_Selected = null;
            this.Sigup_button.IconMarginLeft = 0;
            this.Sigup_button.IconMarginRight = 0;
            this.Sigup_button.IconRightVisible = true;
            this.Sigup_button.IconRightZoom = 0D;
            this.Sigup_button.IconVisible = true;
            this.Sigup_button.IconZoom = 90D;
            this.Sigup_button.IsTab = false;
            this.Sigup_button.Name = "Sigup_button";
            this.Sigup_button.Normalcolor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.Sigup_button.OnHovercolor = System.Drawing.Color.LavenderBlush;
            this.Sigup_button.OnHoverTextColor = System.Drawing.Color.Black;
            this.Sigup_button.selected = false;
            this.Sigup_button.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.Sigup_button.Textcolor = System.Drawing.Color.Black;
            this.Sigup_button.TextFont = new System.Drawing.Font("Microsoft Sans Serif", 16.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Sigup_button.Click += new System.EventHandler(this.Sigup_button_Click);
            // 
            // login_button
            // 
            this.login_button.Activecolor = System.Drawing.Color.FromArgb(((int)(((byte)(46)))), ((int)(((byte)(139)))), ((int)(((byte)(87)))));
            this.login_button.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            resources.ApplyResources(this.login_button, "login_button");
            this.login_button.BorderRadius = 2;
            this.login_button.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.login_button.ButtonText = "     Login";
            this.login_button.Cursor = System.Windows.Forms.Cursors.Hand;
            this.login_button.DisabledColor = System.Drawing.Color.Gray;
            this.login_button.Iconcolor = System.Drawing.Color.Transparent;
            this.login_button.Iconimage = ((System.Drawing.Image)(resources.GetObject("login_button.Iconimage")));
            this.login_button.Iconimage_right = null;
            this.login_button.Iconimage_right_Selected = null;
            this.login_button.Iconimage_Selected = null;
            this.login_button.IconMarginLeft = 0;
            this.login_button.IconMarginRight = 0;
            this.login_button.IconRightVisible = true;
            this.login_button.IconRightZoom = 0D;
            this.login_button.IconVisible = true;
            this.login_button.IconZoom = 90D;
            this.login_button.IsTab = false;
            this.login_button.Name = "login_button";
            this.login_button.Normalcolor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.login_button.OnHovercolor = System.Drawing.Color.LavenderBlush;
            this.login_button.OnHoverTextColor = System.Drawing.Color.Black;
            this.login_button.selected = false;
            this.login_button.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.login_button.Textcolor = System.Drawing.Color.Black;
            this.login_button.TextFont = new System.Drawing.Font("Microsoft Sans Serif", 16.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.login_button.Click += new System.EventHandler(this.login_button_Click);
            // 
            // bunifuCustomLabel3
            // 
            resources.ApplyResources(this.bunifuCustomLabel3, "bunifuCustomLabel3");
            this.bunifuCustomLabel3.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel3.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel3.Name = "bunifuCustomLabel3";
            // 
            // Username_login_textbox
            // 
            resources.ApplyResources(this.Username_login_textbox, "Username_login_textbox");
            this.Username_login_textbox.BackColor = System.Drawing.SystemColors.Control;
            this.Username_login_textbox.BorderColor = System.Drawing.Color.SeaGreen;
            this.Username_login_textbox.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.Username_login_textbox.Name = "Username_login_textbox";
            this.Username_login_textbox.TextChanged += new System.EventHandler(this.bunifuCustomTextbox3_TextChanged);
            // 
            // bunifuCustomLabel2
            // 
            resources.ApplyResources(this.bunifuCustomLabel2, "bunifuCustomLabel2");
            this.bunifuCustomLabel2.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel2.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel2.Name = "bunifuCustomLabel2";
            // 
            // Password_login_textbox
            // 
            resources.ApplyResources(this.Password_login_textbox, "Password_login_textbox");
            this.Password_login_textbox.BackColor = System.Drawing.SystemColors.Control;
            this.Password_login_textbox.BorderColor = System.Drawing.Color.SeaGreen;
            this.Password_login_textbox.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.Password_login_textbox.Name = "Password_login_textbox";
            this.Password_login_textbox.KeyDown += new System.Windows.Forms.KeyEventHandler(this.Password_login_textbox_KeyDown);
            // 
            // Home_Form
            // 
            resources.ApplyResources(this, "$this");
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.Controls.Add(this.bunifuCustomLabel3);
            this.Controls.Add(this.Username_login_textbox);
            this.Controls.Add(this.bunifuCustomLabel2);
            this.Controls.Add(this.Password_login_textbox);
            this.Controls.Add(this.login_button);
            this.Controls.Add(this.Sigup_button);
            this.Controls.Add(this.bunifuGradientPanel1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.Fixed3D;
            this.HelpButton = true;
            this.Name = "Home_Form";
            this.Load += new System.EventHandler(this.Home_Form_Load);
            this.bunifuGradientPanel1.ResumeLayout(false);
            this.bunifuGradientPanel1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private ns1.BunifuGradientPanel bunifuGradientPanel1;
        private ns1.BunifuCustomLabel Bakery_Name_label;
        private ns1.BunifuFlatButton Sigup_button;
        private ns1.BunifuFlatButton login_button;
        private ns1.BunifuCustomLabel bunifuCustomLabel3;
        private WindowsFormsControlLibrary1.BunifuCustomTextbox Username_login_textbox;
        private ns1.BunifuCustomLabel bunifuCustomLabel2;
        private WindowsFormsControlLibrary1.BunifuCustomTextbox Password_login_textbox;
    }
}

