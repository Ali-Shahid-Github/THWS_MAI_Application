namespace Bakery_Management_System
{
    partial class Add_Employee_Form
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
            this.components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Add_Employee_Form));
            this.label1 = new System.Windows.Forms.Label();
            this.bunifuCustomLabel3 = new ns1.BunifuCustomLabel();
            this.employee_name = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel2 = new ns1.BunifuCustomLabel();
            this.bunifuGradientPanel1 = new ns1.BunifuGradientPanel();
            this.Bakery_Name_label = new ns1.BunifuCustomLabel();
            this.Add_employee = new System.Windows.Forms.Button();
            this.bMASDataSet1 = new Bakery_Management_System.BMASDataSet1();
            this.eMPLOYEERoleBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.eMPLOYEE_RoleTableAdapter = new Bakery_Management_System.BMASDataSet1TableAdapters.EMPLOYEE_RoleTableAdapter();
            this.employee_Role = new System.Windows.Forms.ComboBox();
            this.bunifuGradientPanel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.eMPLOYEERoleBindingSource)).BeginInit();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label1.Location = new System.Drawing.Point(172, 138);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(81, 22);
            this.label1.TabIndex = 35;
            this.label1.Text = "Employee";
            // 
            // bunifuCustomLabel3
            // 
            this.bunifuCustomLabel3.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel3.AutoSize = true;
            this.bunifuCustomLabel3.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel3.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel3.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel3.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel3.Location = new System.Drawing.Point(172, 180);
            this.bunifuCustomLabel3.Name = "bunifuCustomLabel3";
            this.bunifuCustomLabel3.Size = new System.Drawing.Size(58, 21);
            this.bunifuCustomLabel3.TabIndex = 29;
            this.bunifuCustomLabel3.Text = "Name";
            this.bunifuCustomLabel3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // employee_name
            // 
            this.employee_name.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.employee_name.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.employee_name.BackColor = System.Drawing.SystemColors.Control;
            this.employee_name.BorderColor = System.Drawing.Color.SeaGreen;
            this.employee_name.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.employee_name.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.employee_name.Location = new System.Drawing.Point(297, 180);
            this.employee_name.Name = "employee_name";
            this.employee_name.Size = new System.Drawing.Size(395, 23);
            this.employee_name.TabIndex = 21;
            this.employee_name.TextChanged += new System.EventHandler(this.uname_TextChanged);
            // 
            // bunifuCustomLabel2
            // 
            this.bunifuCustomLabel2.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel2.AutoSize = true;
            this.bunifuCustomLabel2.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel2.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel2.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel2.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel2.Location = new System.Drawing.Point(172, 217);
            this.bunifuCustomLabel2.Name = "bunifuCustomLabel2";
            this.bunifuCustomLabel2.Size = new System.Drawing.Size(70, 21);
            this.bunifuCustomLabel2.TabIndex = 27;
            this.bunifuCustomLabel2.Text = "Role ID";
            this.bunifuCustomLabel2.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // bunifuGradientPanel1
            // 
            this.bunifuGradientPanel1.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("bunifuGradientPanel1.BackgroundImage")));
            this.bunifuGradientPanel1.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.bunifuGradientPanel1.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.bunifuGradientPanel1.Controls.Add(this.Bakery_Name_label);
            this.bunifuGradientPanel1.Dock = System.Windows.Forms.DockStyle.Top;
            this.bunifuGradientPanel1.GradientBottomLeft = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.bunifuGradientPanel1.GradientBottomRight = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(192)))), ((int)(((byte)(0)))));
            this.bunifuGradientPanel1.GradientTopLeft = System.Drawing.Color.Honeydew;
            this.bunifuGradientPanel1.GradientTopRight = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.bunifuGradientPanel1.Location = new System.Drawing.Point(0, 0);
            this.bunifuGradientPanel1.Name = "bunifuGradientPanel1";
            this.bunifuGradientPanel1.Quality = 50;
            this.bunifuGradientPanel1.Size = new System.Drawing.Size(739, 88);
            this.bunifuGradientPanel1.TabIndex = 36;
            // 
            // Bakery_Name_label
            // 
            this.Bakery_Name_label.AutoSize = true;
            this.Bakery_Name_label.BackColor = System.Drawing.Color.Transparent;
            this.Bakery_Name_label.Font = new System.Drawing.Font("Monotype Corsiva", 26.25F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))));
            this.Bakery_Name_label.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.Bakery_Name_label.Location = new System.Drawing.Point(3, 7);
            this.Bakery_Name_label.Name = "Bakery_Name_label";
            this.Bakery_Name_label.Size = new System.Drawing.Size(185, 43);
            this.Bakery_Name_label.TabIndex = 0;
            this.Bakery_Name_label.Text = "ABC Bakery";
            this.Bakery_Name_label.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // Add_employee
            // 
            this.Add_employee.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.Add_employee.DialogResult = System.Windows.Forms.DialogResult.Cancel;
            this.Add_employee.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.Add_employee.Location = new System.Drawing.Point(172, 264);
            this.Add_employee.Name = "Add_employee";
            this.Add_employee.Size = new System.Drawing.Size(520, 23);
            this.Add_employee.TabIndex = 23;
            this.Add_employee.Text = "OK";
            this.Add_employee.UseVisualStyleBackColor = false;
            this.Add_employee.Click += new System.EventHandler(this.Add_employee_Click);
            // 
            // bMASDataSet1
            // 
            this.bMASDataSet1.DataSetName = "BMASDataSet1";
            this.bMASDataSet1.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // eMPLOYEERoleBindingSource
            // 
            this.eMPLOYEERoleBindingSource.DataMember = "EMPLOYEE_Role";
            this.eMPLOYEERoleBindingSource.DataSource = this.bMASDataSet1;
            // 
            // eMPLOYEE_RoleTableAdapter
            // 
            this.eMPLOYEE_RoleTableAdapter.ClearBeforeFill = true;
            // 
            // employee_Role
            // 
            this.employee_Role.BackColor = System.Drawing.SystemColors.Control;
            this.employee_Role.FormattingEnabled = true;
            this.employee_Role.Location = new System.Drawing.Point(297, 217);
            this.employee_Role.Name = "employee_Role";
            this.employee_Role.Size = new System.Drawing.Size(395, 21);
            this.employee_Role.TabIndex = 37;
            this.employee_Role.SelectedIndexChanged += new System.EventHandler(this.employee_Role_SelectedIndexChanged);
            // 
            // Add_Employee_Form
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(739, 315);
            this.Controls.Add(this.employee_Role);
            this.Controls.Add(this.Add_employee);
            this.Controls.Add(this.bunifuGradientPanel1);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.bunifuCustomLabel3);
            this.Controls.Add(this.employee_name);
            this.Controls.Add(this.bunifuCustomLabel2);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "Add_Employee_Form";
            this.ShowInTaskbar = false;
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Add_Employee_Form";
            this.Load += new System.EventHandler(this.Add_Employee_Form_Load);
            this.bunifuGradientPanel1.ResumeLayout(false);
            this.bunifuGradientPanel1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.bMASDataSet1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.eMPLOYEERoleBindingSource)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private ns1.BunifuCustomLabel bunifuCustomLabel3;
        private ns1.BunifuCustomLabel bunifuCustomLabel2;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox employee_name;
        private ns1.BunifuGradientPanel bunifuGradientPanel1;
        private ns1.BunifuCustomLabel Bakery_Name_label;
        private System.Windows.Forms.Button Add_employee;
        private BMASDataSet1 bMASDataSet1;
        private System.Windows.Forms.BindingSource eMPLOYEERoleBindingSource;
        private BMASDataSet1TableAdapters.EMPLOYEE_RoleTableAdapter eMPLOYEE_RoleTableAdapter;
        private System.Windows.Forms.ComboBox employee_Role;
    }
}