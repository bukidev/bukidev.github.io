var app = new Vue({
    el: '#doctorListApp',
    data: {
        items: [
            {
                dID: 1,
                imgPath: 'assets/img/doctor/001.png',
                dName: 'มนฤดี' ,
                dPosition: 'แพทย์เฉพาะทางด้านศัลยกรรมตกแต่ง',
                fullImgPath: 'assets/img/doctor/001-02.png'
            },
            {
                dID: 2,
                imgPath: 'assets/img/doctor/002.png',
                dName: 'ลีซองจิน' ,
                dPosition: 'แพทย์เฉพาะทางด้านศัลยกรรมตกแต่ง',
                fullImgPath: 'assets/img/doctor/01-2.png'
            },
            {
                dID: 3,
                imgPath: 'assets/img/doctor/01.png',
                dName: 'มินคยองวอน' ,
                dPosition: 'แพทย์เฉพาะทางด้านศัลยกรรมตกแต่ง',
                fullImgPath: 'assets/img/doctor/01-2.png'
            },
            {
                dID: 4,
                imgPath: 'assets/img/doctor/02.png',
                dName: 'ปาร์คซองซู' ,
                dPosition: 'แพทย์เฉพาะทางด้านศัลยกรรมตกแต่ง',
                fullImgPath: 'assets/img/doctor/02-2.png'
            },
            {
                dID: 5,
                imgPath: 'assets/img/doctor/03.png',
                dName: 'คังมินกู' ,
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
                dID: 6,
                imgPath: 'assets/img/doctor/04.png',
                dName: 'ลีจุนอุค' ,
                dPosition: 'แพทย์เฉพาะทางด้านศัลยกรรมตกแต่ง',
                fullImgPath: 'assets/img/doctor/04-2.png',
                lists: [
                    'จบการศึกษาคณะแพทย์ศาสตร์ มหาวิทยาลัย Sung Kyun Kwan',
                    'แพทย์ผู้สอน โรงพยาบาล Samsung',
                    'ผ่านการอบรมจาก MD ANDERSON CANCER CENTER',
                    'สมาชิกสามัญ สมาคมศัลยแพทย์ตกแต่งแห่งประเทศเกาหลีใต้',
                    'สมาชิกสามัญ สมาคมศัลยแพทย์ตกแต่งเสริมสวยแห่งประเทศเกาหลีใต้',
                    'สมาชิกสามัญ ศูนย์วิจัยการศัลยกรรมหน้าอก สมาคมศัลยแพทย์ตกแต่งเสริมสวยแห่งประเทศเกาหลีใต้',
                    'สมาชิกสามัญ ศูนย์วิจัยการชะลอวัย สมาคมศัลยแพทย์ตกแต่งเสริมสวยแห่งประเทศเกาหลีใต้',
                    'สมาชิกสามัญ ศูนย์วิจัยการศัลยกรรมจมูก สมาคมศัลยแพทย์ตกแต่งเสริมสวยแห่งประเทศเกาหลีใต้',
                    'สมาชิกสามัญ ศูนย์วิจัยการดูดและฉีดไขมัน สมาคมศัลยแพทย์ตกแต่งเสริมสวยแห่งประเทศเกาหลีใต้',
                    'ที่ปรึกษาประจำ Monsterzym Group'
                ]
            },
            {
                dID: 7,
                imgPath: 'assets/img/doctor/05.png',
                dName: '.............' ,
                dPosition: 'แพทย์เฉพาะทางด้านศัลยกรรมตกแต่ง',
                fullImgPath: '#'
            },
            {
                dID: 8,
                imgPath: 'assets/img/doctor/06.png',
                dName: '.............' ,
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
        },
        
        closeModal: function() {
            var newModal = document.getElementById('dModal');
            newModal.setAttribute("class", "modal-overlay");
        }
    }
});