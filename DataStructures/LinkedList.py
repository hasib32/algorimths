class Node:
    def __init__(self, data):
        self.data = data
        self.next = None
class LinkedList:
    def __init__(self):
        self.head = None

    def push(self, new_data):
        new_node = Node(new_data)
        new_node.next = self.head
        self.head = new_node

    def printList(self):
        temp = self.head
        while(temp):
            print temp.data,
            temp = temp.next

    def reverse(self):
        prev = None
        current = self.head

        while(current is not None):
            next = current.next
            current.next = prev
            prev = current
            current = next
        self.head = prev



llist = LinkedList()
llist.push(20)
llist.push(4)


print "Given Linked List"
llist.printList()
llist.reverse()
print "\nReversed Linked List"
llist.printList()