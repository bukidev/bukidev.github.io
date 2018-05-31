var app = new Vue({
    el: '#doctorListApp',
    data: {
        items: [
            {
                dID: 1,
                imgPath: 'assets/img/doctor/01.png',
                dName: 'ศัลยแพทย์ มินคยองวอน' ,
                dPosition: 'แพทย์เฉพาะทางด้านศัลยกรรมตกแต่ง',
                fullImgPath: 'assets/img/doctor/01-2.png'
            },
            {
                dID: 2,
                imgPath: 'assets/img/doctor/02.png',
                dName: 'ศัลยแพทย์ ปาร์คซองซู' ,
                dPosition: 'แพทย์เฉพาะทางด้านศัลยกรรมตกแต่ง',
                fullImgPath: '#'
            },
            {
                dID: 3,
                imgPath: 'assets/img/doctor/03.png',
                dName: 'ศัลยแพทย์ คังมินกู' ,
                dPosition: 'แพทย์เฉพาะทางด้านศัลยกรรมตกแต่ง',
                fullImgPath: 'assets/img/doctor/03-2.png',
                lists: [
                    'จบการศึกษา สาขาศัลยกรรมตกแต่ง จาก Asan Medical Center',
                    'เคยดำรงตำแหน่งอาจารย์ผู้สอน สาขาศัลยกรรมตกแต่ง มหาวิทยาลัยแห่งชาติโซล',
                    'เคยดำรงตำแหน่งผู้ช่วยศาสตราจารย์ ประจำโรงพยาบาล Kangbuk Samsung Hospital',

                    'สมาชิกสามัญ สมาคมศัลยแพทย์ตกแต่งแห่งประเทศเกาหลีใต้',
                    'สมาชิิกสามัญ สมาคมศัลยแพทย์ตกแต่งเสริมสวยแห่งประเทศเกาหลีใต้',
                    'International Member สมาคมศัลยแพทย์ ประเทศอเมริกา',
                    'สมาชิกสามััญ สมาคมศัลยแพทย์ตกแต่งเสริมสวยนานาชาติ (ISAPS)',
                    'สมาชิก ศูนย์วิจัยทรวงอก สมาคมศัลยแพทย์ตกแต่ง'
                ]
            },
            {
                dID: 4,
                imgPath: 'assets/img/doctor/04.png',
                dName: 'ศัลยแพทย์ ลีจุนอุค' ,
                dPosition: 'แพทย์เฉพาะทางด้านศัลยกรรมตกแต่ง',
                fullImgPath: '#'
            },
            {
                dID: 5,
                imgPath: 'assets/img/doctor/05.png',
                dName: 'ศัลยแพทย์.............' ,
                dPosition: 'แพทย์เฉพาะทางด้านศัลยกรรมตกแต่ง',
                fullImgPath: '#'
            },
            {
                dID: 6,
                imgPath: 'assets/img/doctor/06.png',
                dName: 'ศัลยแพทย์.............' ,
                dPosition: 'แพทย์เฉพาะทางด้านศัลยกรรมตกแต่ง',
                fullImgPath: '#'
            }
        ],
        modal: {
            dName: '',
            dPosition: '',
            fullImgPath: ''
        }
    },
    methods: {
        showModal: function(id) {
            
            var itemsLength = this.items.length;
            
            for(i = 0; i < itemsLength; i++) {
                
                if(id == this.items[i].dID) {
                    
                    var info = this.items[i];
                    
                    var newModal = document.getElementById('dModal');
                    newModal.setAttribute("class", "modal-overlay show");
                    
                    var mData = this.modal;
                    
                    mData.dName = info.dName;
                    mData.dPosition = info.dPosition;
                    mData.fullImgPath = info.fullImgPath;
                    mData.lists = info.lists;
                    
                }
            }
        }
    }
});