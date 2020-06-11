#!/bin/sh

test -x /usr/bin/tunctl || exit 0
test -n "${IF_TUNCTL_USER}" || exit 0

/usr/bin/tunctl -u "${IF_TUNCTL_USER}" -t "${IFACE}"
